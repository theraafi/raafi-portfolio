<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebviewProfile;
use Illuminate\Support\Facades\Storage;


class WebviewProfileController extends Controller
{
    public function webviewProfile() {
        return view('frontend.webview_profile.profile.create');
    }

    public function store_profile(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);

        try {
            if ($request->hasFile('image' ) && $request->hasFile('logo')) {
                $image = $request->file('image');
                $logo = $request->file('logo');

                $imageName = $request->name . time().'.'.$image->getClientOriginalExtension();
                $logoName = $request->logo . time().'.'.$logo->getClientOriginalExtension();
                $destinationImage = $image->storeAs('public/uploads/frontend_profile/images', $imageName);
                $destinationLogo = $logo->storeAs('public/uploads/frontend_profile/images', $logoName);

                $imagePath = Storage::url($destinationImage);
                $logoPath = Storage::url($destinationLogo);

                $newProfile = new WebviewProfile();
                $newProfile->name = $request->name;
                $newProfile->email = $request->email;
                $newProfile->phone = $request->phone;
                $newProfile->image = $imagePath;
                $newProfile->logo = $logoPath;
                $newProfile->save();


                return redirect(route('admin.webview_profile.create'))->with('newProfile', 'Profile Created Successfully');
            }
        } catch (\Exception $ex) {
            return redirect(route('admin.webview_profile.create'))->with('newProfile', 'Profile Created Successfully');
        }





    }


}

