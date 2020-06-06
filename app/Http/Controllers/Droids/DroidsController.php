<?php

namespace App\Http\Controllers\Droids;

use App\Http\Controllers\Controller;
use App\User;
use App\Droid;
use App\DroidUser;
use App\Role;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DroidsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $droids = Droid::all();
        return view('droids.index', [
           'droids' => $droids,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('droids.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $destinationPath = 'storage\app\images/';

        $newClass = new Droid;
        $newClass['class'] = $request->class;
        $newClass['description'] = $request->description;
        $newClass['path'] = $request->file('file')->store('images');


        // dd($newClass);

        $newClass->save();





        return back()->withMessage('Image Uploaded');
        // //Image Upload
        // $droidImage = auth()->user()->droids()->create($request->all());
        // if ($request->has('img'))
        // {
        //     $droidImage->update(['img' => $request->file('img')->store('images','public')]);
        // }
        // return back()->withMessage('Image Uploaded');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

