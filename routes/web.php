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
Route::get('/', 'HomeController@index')->name('home');

//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/dashboard', 'AdminsController');
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
    Route::resource('/droids', 'DashboardDroidsController');
});

//Droids General
Route::namespace('Droids')->prefix('droids')->name('droids.')->group(function(){
    Route::resource('/index', 'DroidsController');
});

//Droids User
Route::namespace('Droids')->prefix('droids')->name('droid.')->group(function(){
    Route::resource('/user', 'DroidsUsersController');
    Route::post('store', 'DroidsUsersController@store');
});

