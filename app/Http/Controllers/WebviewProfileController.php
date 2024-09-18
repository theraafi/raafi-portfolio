<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WebviewProfile;

class WebviewProfileController extends Controller
{
    public function webviewProfile() {
        return view('frontend.webview_profile.profile.create');
    }

    public function create_profile(Request $request) {

        $rule = $request->validate([
            'name' => ['required','string','max:255'],
            'email' => ['required','email','max:255'],
            'phone' => ['required','numeric','digits:11'],
            'image' => ['required|mimes:jpg,jpeg,png,gif.webp|max:2048'],
            'logo' => ['required|mimes:jpg,jpeg,png,gif.webp|max:1024'],
        ]);

        $profile = new WebviewProfile();
        




    }


}

