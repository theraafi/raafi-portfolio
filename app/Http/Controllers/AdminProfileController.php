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
        $user = User::all();
        return view("admin.profile.edit", compact('user'));
    }


    public function imageUpload(Request $request, User $user)
    {
        $request->validate([
            'user_image' => 'required|mimes:png,jpg,jpeg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('user_image')) {

            $image = $request->file('user_image');
            $imageName = $user->name . '_' . time() . '.' . $image->getClientOriginalExtension();
            $destination = $image->storeAs('public/uploads/admin', $imageName);
            $url = Storage::url($destination);

            User::find($user->id)->update([
                'user_image' => $destination,
            ]);
            return back()->with('success', 'Successfully uploaded');
        }

        // $user = User::findOrFail(Auth::user());


        // $user->user_image = $destination;
        // $user->save();
        // return redirect('admin/profile')->with('success', 'Image Upload Successful');
    }

    // public function update(User $user, $id)
    // {
    //     return view("admin.profile.edit");
    // }



}
