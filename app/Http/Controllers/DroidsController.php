<?php

namespace App\Http\Controllers;

use App\Droid;
use Gate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class DroidsController extends Controller
{
    public function index()
    {
        $droids = Droid::all();

        return view('droids.view', [
            'droids' => $droids,
        ]);
    }

    public function my_droids()
    {
        return view ('droids.my_droids');
    }

    public function store()
    {

        $droid = new Droid();
        $droid->class = request('class');
        $droid->save();

        return back();
    }
}
