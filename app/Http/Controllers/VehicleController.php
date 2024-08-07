<?php

namespace App\Http\Controllers;

use App\Mail\InquiryForm;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;
use LDAP\Result;
use Illuminate\Support\Facades\Mail;

class VehicleController extends Controller
{
    public function common_data()
    {
        $allmake = Vehicle::select('make')->distinct()->get();

        $total = Vehicle::count();

        return [
            'allmake' => $allmake,
            'total' => $total,
            'count' => [
                'toyota' => Vehicle::where('make', 'toyota')->count(),
                'nissan' => Vehicle::where('make', 'nissan')->count(),
                'honda' => Vehicle::where('make', 'honda')->count(),
                'mazda' => Vehicle::where('make', 'mazda')->count(),
                'suzuki' => Vehicle::where('make', 'suzuki')->count(),
                'BMW' => Vehicle::where('make', 'BMW')->count(),
                'mercedes' => Vehicle::where('make', 'mercedes')->count(),
                'audi' => Vehicle::where('make', 'audi')->count(),
                'isuzu' => Vehicle::where('make', 'isuzu')->count(),
                'hino' => Vehicle::where('make', 'hino')->count(),
                'mitsubishi' => Vehicle::where('make', 'mitsubishi')->count(),
                'volkswagen' => Vehicle::where('make', 'volkswagen')->count(),
                'daihatsu' => Vehicle::where('make', 'daihatsu')->count(),
                'mitsuoka' => Vehicle::where('make', 'mitsuoka')->count(),
                'lexus' => Vehicle::where('make', 'lexus')->count(),
                'subaru' => Vehicle::where('make', 'subaru')->count(),

                'hatchback' => Vehicle::where('body_type', 'hatchback')->count(),
                'sedan' => Vehicle::where('body_type', 'sedan')->count(),
                'truck' => Vehicle::where('body_type', 'truck')->count(),
                'van' => Vehicle::where('body_type', 'van')->count(),
                'suv' => Vehicle::where('body_type', 'suv')->count(),
                'pickup' => Vehicle::where('body_type', 'pickup')->count(),
                'wagon' => Vehicle::where('body_type', 'wagon')->count(),
                'buses' => Vehicle::where('body_type', 'buses')->count(),
                'mini buses' => Vehicle::where('body_type', 'mini buses')->count(),
            ],
            "filteroptions" => [
                "make" => Vehicle::select('make')->distinct()->get(),
                "model" => Vehicle::select('model')->distinct()->get(),
            ],
            "total" => Vehicle::select('vehicles')->count(),
            "vehicleOfDay" => Vehicle::select('id', 'thumbnail', 'make', 'model', 'year', 'stock_id')->orderBy('id', 'desc')->limit(3)->get(),
            "country" => [
                'jamaica' => Vehicle::where('country', 'jamaica')->count(),
                'bahamas' => Vehicle::where('country', 'bahamas')->count(),
                'guyana' => Vehicle::where('country', 'guyana')->count(),
                'barbados' => Vehicle::where('country', 'barbados')->count(),
                'kenya' => Vehicle::where('country', 'kenya')->count(),
                'tanzania' => Vehicle::where('country', 'tanzania')->count(),
                'ireland' => Vehicle::where('country', 'ireland')->count(),
                'UK' => Vehicle::where('country', 'UK')->count(),
                'mauritius' => Vehicle::where('country', 'mauritius')->count(),
                'pakistan' => Vehicle::where('country', 'pakistan')->count(),
            ]
        ];
    }

    public function load_view(string $view, array $data = [])
    {
        $data = array_merge($data, $this->common_data());
        return view($view, $data);
    }

    public function index()
    {
        return $this->load_view('stock', [
            'vehicles' => DB::table('stocks')->orderBy('id', 'desc')->paginate(6),
            'stylesheet' => 'stock.css',
            'totalvehicles' => Vehicle::count(),
            'msg' => Vehicle::count() == 0 && 'No Vehicles Found',
            'sidebar' => true,
            'title' => 'Japanese Used Car Exporter'
        ]);
    }

    public function limited()
    {
        $discounted = Vehicle::where('category', 'discounted')
            ->take(4)
            ->orderBy('id', 'desc')
            ->get();
        $newarival = Vehicle::where('category', 'new arrival')
            ->take(4)
            ->orderBy('id', 'desc')
            ->get();
        $commercial = Vehicle::where('category', 'commercial')
            ->take(4)
            ->orderBy('id', 'desc')
            ->get();
        $allStock = Vehicle::take(12)
            ->orderBy('id', 'desc')
            ->get();

        return $this->load_view('index', [
            'discounted' => $discounted,
            'newarival' => $newarival,
            'commercial' => $commercial,
            'allStock' => $allStock,
            'stylesheet' => 'home.css',
            'sidebar' => true,
            'title' => 'Japanese Used Car Exporter'
        ]);
    }

    public function show(int $id)
    {
        $vehicle = Vehicle::findOrFail($id);

        return $this->load_view('vehicle-info', [
            'vehicle' => $vehicle,
            'stylesheet' => 'vehicle-info.css',
            'sidebar' => false,
            'title' => strtoupper($vehicle["make"]) . " " . strtoupper($vehicle["model"]) . " " . strtoupper($vehicle["year"])
        ]);
    }

    public function filter(Request $request)
    {
        $make = $request->input('make');
        $model = $request->input('model');
        $stock = $request->input('stock');

        $category = $request->input('category');
        $fueltype = $request->input('fueltype');
        $transmission = $request->input('transmission');
        $yearfrom = $request->input('yearfrom');
        $yearto = $request->input('yearto');

        $query = Vehicle::query();

        if ($make) {
            $query->where('make', $make);
        }
        if ($model) {
            $query->where('model', $model);
        }
        if ($stock) {
            $query->where('id', $stock);
        }
        if ($category) {
            $query->where('category', $category);
        }
        if ($fueltype) {
            $query->where('fuel', $fueltype);
        }
        if ($transmission) {
            $query->where('transmission', $transmission);
        }
        if ($yearfrom) {
            $query->where('year', $yearfrom);
        }
        if ($yearto) {
            $query->where('year', $yearto);
        }
        $vehicles = $query->orderBy('id', 'desc')->paginate(5);
        $totalcount = $query->count();

        return $this->load_view('stock', [
            'title' => 'Filter Results',
            'totalvehicles' => $totalcount,
            'msg' => $totalcount == 0 ?? 'No Vehicles Found',
            'stylesheet' => 'stock.css',
            'sidebar' => true,
            'vehicles' => $vehicles
        ]);
    }

    public function search(Request $request)
    {
        $vehicles = '';

        $totalcount = $request->count();

        return $this->load_view('stock', [
            'title' => 'Filter Results',
            'totalvehicles' => $totalcount,
            'msg' => $totalcount == 0 ?? 'No Vehicles Found',
            'stylesheet' => 'stock.css',
            'sidebar' => true,
            'vehicles' => $vehicles
        ]);
    }

    public function filterMake(string $make)
    {
        $vehicles = Vehicle::where('make', $make)
            ->paginate(5);

        $totalVehicles = Vehicle::where('make', $make)->count();
        $msg = null;

        if ($totalVehicles == 0) {
            $msg = "No Vehicles Present";
        }
        return $this->load_view('stock', [
            'vehicles' => $vehicles,
            'msg' => $msg,
            'totalvehicles' => $totalVehicles,
            'stylesheet' => 'stock.css',
            'title' => 'Car Stock',
            'sidebar' => true
        ]);
    }

    public function filterType(string $type)
    {
        $vehicles = Vehicle::where('body_type', $type)
            ->paginate(5);

        $totalVehicles = Vehicle::where('body_type', $type)->count();
        $msg = null;

        if ($totalVehicles == 0) {
            $msg = "No Vehicles Present";
        }

        return $this->load_view('stock', [
            'vehicles' => $vehicles,
            'title' => 'Car Stock',
            'stylesheet' => 'stock.css',
            'sidebar' => true,
            'msg' => $msg,
            'totalvehicles' => $totalVehicles,
        ]);
    }

    public function filterCountry(string $country)
    {
        $vehicles = Vehicle::where('country', $country)
            ->paginate(5);

        $totalVehicles = Vehicle::where('country', $country)->count();
        $msg = null;

        if ($totalVehicles == 0) {
            $msg = "No Vehicles Present";
        }

        return $this->load_view('stock', [
            'vehicles' => $vehicles,
            'title' => 'Car Stock',
            'stylesheet' => 'stock.css',
            'sidebar' => true,
            'msg' => $msg,
            'totalvehicles' => $totalVehicles,
        ]);
    }

    public function filterCategory(string $category)
    {
        $vehicles = Vehicle::where('category', $category)
            ->paginate(5);

        $totalVehicles = Vehicle::where('category', $category)->count();
        $msg = null;

        if ($totalVehicles == 0) {
            $msg = "No Vehicles Present";
        }

        return $this->load_view('stock', [
            'vehicles' => $vehicles,
            'title' => 'Car Stock',
            'stylesheet' => 'stock.css',
            'sidebar' => true,
            'msg' => $msg,
            'totalvehicles' => $totalVehicles,
        ]);
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

    public function getModels(Request $request)
    {
        $make = $request->input('make');
        $models = Vehicle::where('make', $make)->distinct()->pluck('model');
        return response()->json($models);
    }

    public function getFueltype(Request $request)
    {
        $model = $request->input('model');
        $result = [];
        $fueltype = Vehicle::where('model', $model)->pluck('fuel');
        foreach ($fueltype as $fuel) {
            if (in_array($fueltype, $fuel) == null) {
                array_push($result, $fueltype);
            }
        }
        return response()->json($result);
    }

    public function getYears(Request $request)
    {
        $model = $request->input('model');
        $result = Vehicle::where('model', $model)->orderBy('year', 'ASC')->distinct()->pluck('year');
        return response()->json($result);
    }

    public function sendMail(Request $request)
    {
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'coment' => $request->input('coment'),
        ];

        Mail::to($request->input('email'))->send(new InquiryForm($data));
    }

    public function searchFilter(Request $request)
    {
        $search = $request->input('search');

        return $this->load_view('stock', [
            'vehicles' => Vehicle::search($search)->get(),
            'stylesheet' => 'stock.css',
            'msg' => Vehicle::count() == 0 && 'No Vehicles Found',
            'sidebar' => true,
            'title' => 'Japanese Used Car Exporter'
        ]);
    }
}
