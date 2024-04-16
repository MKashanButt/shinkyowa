<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleInfo;
use App\Models\VehicleImage;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicles = Vehicle::join('vehicle_infos', 'vehicles.id', '=', 'vehicle_infos.vehicle_id')
            ->join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
            ->orderByDesc('vehicles.id')
            ->paginate(5, ['vehicles.*', 'vehicle_infos.*', 'vehicle_images.*']);
        return view('stock.index', [
            'vehicles' => $vehicles,
            'title' => 'Used Cars Stock'
        ]);
    }

    public function limited()
    {
        $vehicle = Vehicle::take(12)
            ->join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
            ->orderByDesc('vehicles.id')
            ->get(['vehicles.*', 'vehicle_images.thumbnail']);

        return view('home.index', [
            'vehicle' => $vehicle,
            'title' => 'Japanese Used Car Exporter'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $vehicle = Vehicle::where("id", $id)->firstOrFail();
        $vehicle_info = VehicleInfo::where("vehicle_id", $id)->firstOrFail();
        $vehicle_image = VehicleImage::where("vehicle_id", $id)->pluck('url');

        return view('vehicle-info.index', [
            'vehicle' => $vehicle,
            'vehicle_info' => $vehicle_info,
            'vehicle_image' => $vehicle_image,
            'title' => 'Vehicle Info'
        ]);
    }
    public function filter(Request $request)
    {
        $searchTerm = $request->input('search');
        $result = Vehicle::search($searchTerm)->get();

        // Pass the results to the view
        return view('stock.index', [
            'vehicles' => $result,
            'title' => ''
        ]);
    }
    public function filterMake(string $make)
    {
        $vehicles = Vehicle::join('vehicle_infos', 'vehicles.id', '=', 'vehicle_infos.vehicle_id')
            ->join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
            ->where('vehicles.make', $make)
            ->paginate(5, ['vehicles.*', 'vehicle_infos.*', 'vehicle_images.thumbnail']);

        return view('stock.index', [
            'vehicles' => $vehicles,
            'title' => 'Car Stock'
        ]);
    }
    public function filterType(string $type)
    {
        $vehicles = Vehicle::join('vehicle_infos', 'vehicles.id', '=', 'vehicle_infos.vehicle_id')
            ->join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
            ->where('vehicle_infos.type', $type)
            ->paginate(5, ['vehicles.*', 'vehicle_infos.*', 'vehicle_images.thumbnail']);

        return view('stock.index', [
            'vehicles' => $vehicles,
            'title' => 'Car Stock'
        ]);
    }

    public function sidebar_options()
    {
        $allMake = Vehicle::select('make')->distinct()->get();
        return [
            'allmake' => $allMake
        ];
    }

    public function home()
    {
        $vehicle = Vehicle::take(12)
            ->join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
            ->orderByDesc('vehicles.id')
            ->get(['vehicles.*', 'vehicle_images.thumbnail']);

        $allMake = Vehicle::select('make')->distinct()->get();

        return view('home.index', [
            'vehicle' => $vehicle,
            'allmake' => $allMake,
            'title' => 'Japanese Used Car Exporter'
        ]);
    }
    public function getModels(Request $request)
    {
        $make = $request->input('make');
        $models = Vehicle::where('make', $make)->pluck('model');
        return response()->json($models);
    }
}
