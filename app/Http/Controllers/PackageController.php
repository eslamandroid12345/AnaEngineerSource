<?php

namespace App\Http\Controllers;

use App\Models\Magazine;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{

    public function index_portel()
    {
        $package = Package::all();
        return view('Dashbord.Magazine.Magazine', compact('Magazine'));

    }
    public function create_package_portel()
    {
        return view('Dashbord.Magazine.Magazine', compact('Magazine'));
    }

    public function create_package(Request $request)
    {

        $request->validate([
            'title' => 'required|string',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png',
            'link' => 'required|string',
        ]);
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function edit(Package $package)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        //
    }
}
