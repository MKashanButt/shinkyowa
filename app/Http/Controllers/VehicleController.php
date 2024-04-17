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
        $vehicle = Vehicle::findOrFail($id);
        $vehicle_info = VehicleInfo::where("vehicle_id", $id)->firstOrFail();
        $vehicle_images = VehicleImage::where("vehicle_id", $id)->get('url');
        $total = Vehicle::select('vehicles')->count();

        return view('vehicle-info.index', [
            'vehicle' => $vehicle,
            'vehicle_info' => $vehicle_info,
            'vehicle_image' => $vehicle_images,
            'total' => $total,
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

        $allMake = Vehicle::select('make')->distinct()->get();
        $toyota = Vehicle::where('make', 'toyota')->count();
        $nissan = Vehicle::where('make', 'nissan')->count();
        $honda = Vehicle::where('make', 'honda')->count();
        $mazda = Vehicle::where('make', 'mazda')->count();
        $suzuki = Vehicle::where('make', 'suzuki')->count();
        $BMW = Vehicle::where('make', 'BMW')->count();
        $isuzu = Vehicle::where('make', 'isuzu')->count();
        $hino = Vehicle::where('make', 'hino')->count();
        $mitsubishi = Vehicle::where('make', 'mitsubishi')->count();
        $volkswagen = Vehicle::where('make', 'volkswagen')->count();

        $total = Vehicle::select('vehicles')->count();
        $totalVehicles = Vehicle::where('make', $make)->count();
        $msg = null;

        if ($totalVehicles == 0) {
            $msg = "No Vehicles Present";
        }

        $count = [
            'toyota' => $toyota,
            'nissan' => $nissan,
            'honda' => $honda,
            'mazda' => $mazda,
            'suzuki' => $suzuki,
            'BMW' => $BMW,
            'isuzu' => $isuzu,
            'hino' => $hino,
            'mitsubishi' => $mitsubishi,
            'volkswagen' => $volkswagen,
        ];
        return view('stock.index', [
            'vehicles' => $vehicles,
            'allmake' => $allMake,
            'count' => $count,
            'total' => $total,
            'msg' => $msg,
            'totalvehicles' => $totalVehicles,
            'title' => 'Car Stock'
        ]);
    }
    public function filterType(string $type)
    {
        $vehicles = Vehicle::join('vehicle_infos', 'vehicles.id', '=', 'vehicle_infos.vehicle_id')
            ->join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
            ->where('vehicle_infos.type', $type)
            ->paginate(5, ['vehicles.*', 'vehicle_infos.*', 'vehicle_images.thumbnail']);

        $allMake = Vehicle::select('make')->distinct()->get();
        $toyota = Vehicle::where('make', 'toyota')->count();
        $nissan = Vehicle::where('make', 'nissan')->count();
        $honda = Vehicle::where('make', 'honda')->count();
        $mazda = Vehicle::where('make', 'mazda')->count();
        $suzuki = Vehicle::where('make', 'suzuki')->count();
        $BMW = Vehicle::where('make', 'BMW')->count();
        $isuzu = Vehicle::where('make', 'isuzu')->count();
        $hino = Vehicle::where('make', 'hino')->count();
        $mitsubishi = Vehicle::where('make', 'mitsubishi')->count();
        $volkswagen = Vehicle::where('make', 'volkswagen')->count();

        $total = Vehicle::select('vehicles')->count();

        $totalVehicles = Vehicle::where('type', $type);

        $count = [
            'toyota' => $toyota,
            'nissan' => $nissan,
            'honda' => $honda,
            'mazda' => $mazda,
            'suzuki' => $suzuki,
            'BMW' => $BMW,
            'isuzu' => $isuzu,
            'hino' => $hino,
            'mitsubishi' => $mitsubishi,
            'volkswagen' => $volkswagen,
        ];
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
        $toyota = Vehicle::where('make', 'toyota')->count();
        $nissan = Vehicle::where('make', 'nissan')->count();
        $honda = Vehicle::where('make', 'honda')->count();
        $mazda = Vehicle::where('make', 'mazda')->count();
        $suzuki = Vehicle::where('make', 'suzuki')->count();
        $BMW = Vehicle::where('make', 'BMW')->count();
        $isuzu = Vehicle::where('make', 'isuzu')->count();
        $hino = Vehicle::where('make', 'hino')->count();
        $mitsubishi = Vehicle::where('make', 'mitsubishi')->count();
        $volkswagen = Vehicle::where('make', 'volkswagen')->count();

        $total = Vehicle::select('vehicles')->count();

        $count = [
            'toyota' => $toyota,
            'nissan' => $nissan,
            'honda' => $honda,
            'mazda' => $mazda,
            'suzuki' => $suzuki,
            'BMW' => $BMW,
            'isuzu' => $isuzu,
            'hino' => $hino,
            'mitsubishi' => $mitsubishi,
            'volkswagen' => $volkswagen,
        ];
        return view('home.index', [
            'vehicle' => $vehicle,
            'allmake' => $allMake,
            'count' => $count,
            'total' => $total,
            'title' => 'Japanese Used Car Exporter'
        ]);
    }
    public function stock()
    {
        $vehicles = Vehicle::join('vehicle_infos', 'vehicles.id', '=', 'vehicle_infos.vehicle_id')
            ->join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
            ->orderByDesc('vehicles.id')
            ->paginate(5, ['vehicles.*', 'vehicle_infos.*', 'vehicle_images.*']);

        $allMake = Vehicle::select('make')->distinct()->get();
        $toyota = Vehicle::where('make', 'toyota')->count();
        $nissan = Vehicle::where('make', 'nissan')->count();
        $honda = Vehicle::where('make', 'honda')->count();
        $mazda = Vehicle::where('make', 'mazda')->count();
        $suzuki = Vehicle::where('make', 'suzuki')->count();
        $BMW = Vehicle::where('make', 'BMW')->count();
        $isuzu = Vehicle::where('make', 'isuzu')->count();
        $hino = Vehicle::where('make', 'hino')->count();
        $mitsubishi = Vehicle::where('make', 'mitsubishi')->count();
        $volkswagen = Vehicle::where('make', 'volkswagen')->count();

        $total = Vehicle::select('vehicles')->count();

        $count = [
            'toyota' => $toyota,
            'nissan' => $nissan,
            'honda' => $honda,
            'mazda' => $mazda,
            'suzuki' => $suzuki,
            'BMW' => $BMW,
            'isuzu' => $isuzu,
            'hino' => $hino,
            'mitsubishi' => $mitsubishi,
            'volkswagen' => $volkswagen,
        ];

        return view('stock.index', [
            'vehicles' => $vehicles,
            'allmake' => $allMake,
            'count' => $count,
            'total' => $total,
            'title' => 'Used Cars Stock'
        ]);
    }
    public function getModels(Request $request)
    {
        $make = $request->input('make');
        $models = Vehicle::where('make', $make)->distinct()->pluck('model');
        return response()->json($models);
    }
    public function sales_and_bank_details()
    {

        $allMake = Vehicle::select('make')->distinct()->get();
        $toyota = Vehicle::where('make', 'toyota')->count();
        $nissan = Vehicle::where('make', 'nissan')->count();
        $honda = Vehicle::where('make', 'honda')->count();
        $mazda = Vehicle::where('make', 'mazda')->count();
        $suzuki = Vehicle::where('make', 'suzuki')->count();
        $BMW = Vehicle::where('make', 'BMW')->count();
        $isuzu = Vehicle::where('make', 'isuzu')->count();
        $hino = Vehicle::where('make', 'hino')->count();
        $mitsubishi = Vehicle::where('make', 'mitsubishi')->count();
        $volkswagen = Vehicle::where('make', 'volkswagen')->count();

        $total = Vehicle::select('vehicles')->count();

        $count = [
            'toyota' => $toyota,
            'nissan' => $nissan,
            'honda' => $honda,
            'mazda' => $mazda,
            'suzuki' => $suzuki,
            'BMW' => $BMW,
            'isuzu' => $isuzu,
            'hino' => $hino,
            'mitsubishi' => $mitsubishi,
            'volkswagen' => $volkswagen,
        ];
        return view('bank-details.index', [
            'allmake' => $allMake,
            'count' => $count,
            'total' => $total,
            'title' => 'Banking Details'
        ]);
    }
}
