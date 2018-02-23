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
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [ 'as'=>'home', function () {
    //return view('welcome');
    //return view('bootstrap');
    return view('template');
}]);

Route::get('/b', [ 'as'=>'bootstrap', function () {
    return view('bootstrap');
}]);

Route::get('/Alen', function () {
    //echo route('home');
    return redirect()->route('home');
    //return view('welcome');
});