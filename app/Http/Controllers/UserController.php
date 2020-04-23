<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
       $userinfo = DB::table('users')->get();
       return view('welcome')->with(['userinfo'=>$userinfo]);
    }

    public function edit(User $user)
    {
        dd($user);
    }
}
