<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function home(){
        $users = User::find(Auth::user());
        return view("admin.home", compact('users'));
    }


}
