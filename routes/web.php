<?php

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

Route::get('/', function () {
    $conf=App\Conference::first();
    session(['conf_id' => $conf->id]); 
    return view('welcome')->with('conf',$conf);
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');
