<?php

namespace App\Http\Controllers\Droids;

use Gate;
use App\User;
use App\Role;
use App\Droid;
use App\DroidUser;
use App\DroidDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

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
        $user = auth()->user();

        $my_droids = DB::table('droid_user')
            ->join('droids', 'droid_id', '=', 'droids.id')
            ->select('droid_user.id', 'droids.class', 'droids.image')
            ->where('droid_user.user_id', '=', $user->id)
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
        return view('droids.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Assigns a Droid to a user
        $newDroidBuild = $request->input('droidIdentification');
        $newBuild = new DroidUser();
        $newBuild->user_id=auth()->user()->id;
        $newBuild->droid_id=$newDroidBuild;
        $newBuild->save();

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
        //Returns checklist for that droid
        $currentBuilds = DB::table('droid_user')
            ->join('droids', 'droid_id', '=', 'droids.id')
            ->select('droids.class', 'droids.id')
            ->where('droid_user.id', '=', $id)
            ->get();

        //Displays parts for current droid
        $Parts = DB::table('parts')
            ->join('droid_user', 'droid_user.droid_id', '=', 'parts.droids_id')
            ->where('droid_user.id', '=', $id)
            ->select('parts.id', 'droid_section', 'sub_section', 'part_name')
            ->orderBy('droid_section', 'DESC')
            ->orderBy('sub_section')
            ->get();

        //Filters Droid Details table by current droid_user_id
        $droidDetails = DB::table('droid_details')
            ->where('droid_user_id', '=', $id)
            ->get();

        return view('droids.user.edit', [
            'currentBuilds' => $currentBuilds,
            'Parts' => $Parts,
            'droidDetails' => $droidDetails,
        ]);
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
        //Deletes Droid from droid_user table
        $my_droids = DB::table('droid_user')->where('droid_user.id', '=', $id);
        $my_droids->delete();

        return redirect()->route('droid.user.index');

    }
}
