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
    return view('template',['title'=>'Barkalov Alen']);
}]);

Route::get('/b', [ 'as'=>'bootstrap', function () {
	// Можно так:
    //return view('bootstrap',['title'=>'Barkalov Alen']);
	$data = array('title' => 'Наименование. Баркалов Ален','title2'=>'Наимнование -2-');
	
    // А можно так:
    //return view('bootstrap',$data);
    // А можно ещё и так:
    //return view('bootstrap')->with('title','Другой вариант заголовка');
    // Если нужно несколько переменных передать:
    $view = view('bootstrap');

    $view->with('title','Другой вариант заголовка');
    $view->with('title2','Заголовок2');
    $view->with('title3','Заголовок3');

    return $view;
}]);

//IndexController
Route::get('/bs', ['uses'=>'IndexController@show','as'=>'bs']);
Route::get('/Alen', function () {
    //echo route('home');
    return redirect()->route('home');
    //return view('welcome');
});

Route::get('/about', ['uses'=>'Admin\AboutController@show','as'=>'about']);
Route::get('/articles', ['uses'=>'Admin\Core@getArticles','as'=>'articles']);
Route::get('/article/{id}', ['uses'=>'Admin\Core@getArticle','as'=>'article']);

Route::match(['get','post'],'/contact',['uses'=>'Admin\ContactController@show','as'=>'contact']);

Route::match(['get','post'],'/contact2',['uses'=>'Admin\ContactController@show','as'=>'contact2']);