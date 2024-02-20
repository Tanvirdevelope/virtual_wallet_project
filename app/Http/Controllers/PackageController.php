<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    function PackagePage(){
        return view('dashboard.adminHome');
    }

    public function index()
    {
        $packages = Package::all();
        return response()->json(['packages' => $packages]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
        ]);

        $package = Package::create($request->all());

        return response()->json(['package' => $package], 201);
    }
}
