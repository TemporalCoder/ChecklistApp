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

class DroidsUsersController extends Controller
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
        $my_droids = DB::table('droid_user')
        ->join('droids', 'droid_id', '=', 'droids.id')
        ->select('droid_user.id', 'droids.class', 'droids.path')
        ->get();

        return view('droids.user.index', ['my_droids' => $my_droids]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newDroidBuild = $request->input('droidIdentification');
        $newBuild = new DroidUser();
        $newBuild->user_id=auth()->user()->id;
        $newBuild->droid_id=$newDroidBuild;
        $newBuild->save();
        // dd($newBuild);

        return redirect()->route('droid.user.index');

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
    public function edit(Request $request, $id)
    {
        $currentBuilds = DB::table('droid_user')
        ->join('droids', 'droid_id', '=', 'droids.id')
        ->select('droids.class')
        ->where('droid_user.id', '=', $id)
        ->get();
        return view('droids.user.edit', ['currentBuilds' => $currentBuilds]);
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
    public function destroy(Request $request, $id)
    {
        $my_droids = DB::table('droid_user')->where('droid_user.id', '=', $id);
        $my_droids->delete();
        return redirect()->route('droid.user.index');

    }
}
