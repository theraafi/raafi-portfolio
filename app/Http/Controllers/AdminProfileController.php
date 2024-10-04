<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Expr\Cast\String_;

class AdminProfileController extends Controller
{

    public function adminProfile()
    {
        $user = Auth::user();
        return view("admin.profile.index", compact('user'));
    }


    public function editProfile(User $user)
    {
        // $id = Auth::user()->id;
        $user = Auth::user();
        return view("admin.profile.edit", compact('user'));
    }


    public function imageUpload(Request $request, User $user)
    {
        $userImg = User::find(Auth::id());
        $path = $userImg->user_image;
        Storage::delete($path);

        $request->validate([
            'user_image' => 'required|mimes:png,jpg,jpeg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('user_image')) {


            $image = $request->file('user_image');
            $imageName = Auth::user()->name . '_' . time() . '.' . $image->getClientOriginalExtension();
            $destination = $image->storeAs('public/uploads/admin', $imageName);
            $url = Storage::url($destination);


            User::find(Auth::id())->update([
                'user_image' => $destination,
            ]);
            session()->flash('success', 'Image saved successfully');
            return back();
        }


    }





}
