<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Droids;

class DashboardController extends Controller
{
        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
        /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $droids = Droids::all();
        return view('dashboard')->with('droids', $droids);
    }
}
