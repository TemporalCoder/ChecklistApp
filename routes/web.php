<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();

//Home
Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'LoginController@logout');

//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

//Droids
Route::post('view', 'DroidsController@store');
Route::get('view', 'DroidsController@index')->name('droids.index')->middleware('can:add-droids');
Route::get('view', 'DroidsController@my_droids')->name('droids.my_droids');
