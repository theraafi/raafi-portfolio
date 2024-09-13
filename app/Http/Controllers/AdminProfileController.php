<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminProfileController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        return view("admin.profile.index", compact('users'));
    }


    public function store()
    {
        $users = Auth::user();
        return view("admin.profile.index", compact('users'));
    }




    public function edit(User $user)
    {
        // $users = Auth::find($user->id);
        return view("admin.profile.edit");
    }


    public function update(User $user)
    {
        return view("admin.profile.edit");
    }



}
