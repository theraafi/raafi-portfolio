<?php

namespace App\Http\Controllers;

use App\Models\FrontendProfile;
use Illuminate\Http\Request;

class FrontendProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.frontend_profile.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.frontend_profile.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            // 'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
            'description' => 'required',
        ]);

        $newProfile = new FrontendProfile();
        $newProfile->name = $request->name;
        $newProfile->email = $request->email;
        $newProfile->phone = $request->phone;
        $newProfile->save();

        
    }

    /**
     * Display the specified resource.
     */
    public function show(FrontendProfile $frontendProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FrontendProfile $frontendProfile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, FrontendProfile $frontendProfile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FrontendProfile $frontendProfile)
    {
        //
    }
}
