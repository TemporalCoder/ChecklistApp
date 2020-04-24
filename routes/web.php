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

//Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except' => ['show', 'create', 'store']]);
});

//Dashboard
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');


//User
Route::post('/dashboard/{$user->id}', 'DroidController@add_users_droid');

//Droids
Route::get('/', 'DroidController@index');
Route::get('/home', 'DroidController@droids_all');

Route::get('all_list', 'DroidController@droids_all');
