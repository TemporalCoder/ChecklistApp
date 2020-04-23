<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Droids;

class DroidController extends Controller
{
    public function index()
    {
        $user = Auth::user();
    	return view('home',compact('user'));

    //    $droidresults = DB::table('droids')->get();
    //    return view('welcome')->with(['droidresults'=>$droidresults]);
    }

    public function droids_all()
    {
        $all_list = Droids::all();
        return view('home')->with(['all_list' => $all_list]);
    }
}
