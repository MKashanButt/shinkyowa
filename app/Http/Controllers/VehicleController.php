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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
