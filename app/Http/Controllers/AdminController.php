<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input('email');
        $password = md5($request->input('password'));

        $user = User::where('email', $email)->where('password', $password);
        if ($user) {
            return redirect('admin/dashboard');
        }
    }

    public function index()
    {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
            'stylesheet' => 'dashboard.css'
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
