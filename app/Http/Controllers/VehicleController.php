<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Models\VehicleInfo;
use App\Models\VehicleImage;
use Illuminate\Support\Facades\DB;

class VehicleController extends Controller
{
    public function common_data()
    {
        $allmake = Vehicle::select('make')->distinct()->get();

        $total = Vehicle::count();

        $count = [
            'toyota' => Vehicle::where('make', 'toyota')->count(),
            'nissan' => Vehicle::where('make', 'nissan')->count(),
            'honda' => Vehicle::where('make', 'honda')->count(),
            'mazda' => Vehicle::where('make', 'mazda')->count(),
            'suzuki' => Vehicle::where('make', 'suzuki')->count(),
            'BMW' => Vehicle::where('make', 'nissan')->count(),
            'isuzu' => Vehicle::where('make', 'isuzu')->count(),
            'hino' => Vehicle::where('make', 'hino')->count(),
            'mitsubishi' => Vehicle::where('make', 'mitsubishi')->count(),
            'volkswagen' => Vehicle::where('make', 'volkswagen')->count(),
            'daihatsu' => Vehicle::where('make', 'daihatsu')->count(),
            'mitsuoka' => Vehicle::where('make', 'mitsuoka')->count(),
            'lexus' => Vehicle::where('make', 'lexus')->count(),
            'subaru' => Vehicle::where('make', 'subaru')->count()
        ];
        return [
            'allmake' => $allmake,
            'total' => $total,
            'count' => $count,
        ];
    }

    public function load_view(string $view, array $data = [])
    {
        $data = array_merge($data, $this->common_data());
        return view($view, $data);
    }

    public function index()
    {
        $vehicles = Vehicle::join('vehicle_infos', 'vehicles.id', '=', 'vehicle_infos.vehicle_id')
            ->join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
            ->orderByDesc('vehicles.id')
            ->paginate(5, ['vehicles.*', 'vehicle_infos.*', 'vehicle_images.*']);

        return $this->load_view('stock', [
            'vehicles' => $vehicles,
            'stylesheet' => 'stock.css',
            'totalvehicles' => Vehicle::count(),
            'msg' => Vehicle::count() == 0 && 'No Vehicles Found',
            'sidebar' => true,
            'title' => 'Japanese Used Car Exporter'
        ]);
    }

    public function limited()
    {
        $vehicle = Vehicle::take(12)
            ->join('vehicle_images', 'vehicles.id', '=', 'vehicle_images.vehicle_id')
            ->orderByDesc('vehicles.id')
            ->get(['vehicles.*', 'vehicle_images.thumbnail']);

        return $this->load_view('index', [
            'vehicle' => $vehicle,
            'stylesheet' => 'home.css',
            'sidebar' => true,
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

        return $this->load_view('vehicle-info', [
            'vehicle' => $vehicle,
            'vehicle_info' => $vehicle_info,
            'vehicle_image' => $vehicle_images,
            'stylesheet' => 'vehicle-info.css',
            'sidebar' => false,
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
        $mazda = Vehicle::where('make', 'mazda')->count();
        $mitsubishi = Vehicle::where('make', 'mitsubishi')->count();
        $honda = Vehicle::where('make', 'honda')->count();
        $suzuki = Vehicle::where('make', 'suzuki')->count();
        $subaru = Vehicle::where('make', 'subaru')->count();
        $isuzu = Vehicle::where('make', 'isuzu')->count();
        $daihatsu = Vehicle::where('make', 'daihatsu')->count();
        $mitsuoka = Vehicle::where('make', 'mitsuoka')->count();
        $lexus = Vehicle::where('make', 'lexus')->count();
        $BMW = Vehicle::where('make', 'BMW')->count();
        $hino = Vehicle::where('make', 'hino')->count();
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
            'daihatsu' => $daihatsu,
            'mitsuoka' => $mitsuoka,
            'lexus' => $lexus,
            'subaru' => $subaru
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

    public function getModels(Request $request)
    {
        $make = $request->input('make');
        $models = Vehicle::where('make', $make)->distinct()->pluck('model');
        return response()->json($models);
    }
    public function sales_and_bank_details()
    {
        return $this->load_view('bank-details', [
            'title' => 'Sales and Banking Details',
            'stylesheet' => 'bank-details.css',
            'sidebar' => false
        ]);
    }
    public function shipping()
    {
        return $this->load_view('shipping', [
            'title' => 'Shipping Service',
            'sidebar' => null,
            'stylesheet' => 'shipping.css'
        ]);
    }
    public function inspection()
    {
        return $this->load_view('inspection', [
            'title' => 'Inspection Service',
            'sidebar' => null,
            'stylesheet' => 'inspection.css'
        ]);
    }
    public function company_profile()
    {
        return $this->load_view('company-profile', [
            'title' => 'Company Profile',
            'sidebar' => null,
            'stylesheet' => 'company-profile.css'
        ]);
    }
    public function why_choose_us()
    {
        return $this->load_view('why-choose-us', [
            'title' => 'Why Choose Us',
            'sidebar' => null,
            'stylesheet' => 'why-choose-us.css'
        ]);
    }
}
