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
    return redirect('login');
});

Route::get('home', function () {
     return view('home');
});

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('users','UsersController')->except(['destroy']);
    Route::get('users/{id}/destroy',[
        'uses'  =>  'UsersController@destroy',
        'as'    =>  'users.destroy'
    ]);
});

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('teachers','TeachersController')->except(['destroy']);
    Route::get('teachers/{id}/destroy',[
        'uses'  =>  'TeachersController@destroy',
        'as'    =>  'teachers.destroy'
    ]);
});

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('faculties','FacultiesController')->except(['destroy']);
    Route::get('faculties/{id}/destroy',[
        'uses'  =>  'FacultiesController@destroy',
        'as'    =>  'faculties.destroy'
    ]);
});

Route::group(['middleware' => 'auth'], function () {
    
    Route::resource('careers','CareersController')->except(['destroy', 'create']);
    Route::get('careers/create/{faculty?}',[
        'uses'  =>  'CareersController@',
        'as'    =>  'careers.create'
    ]);
    Route::get('careers/{id}/destroy',[
        'uses'  =>  'CareersController@destroy',
        'as'    =>  'careers.destroy'
    ]);
});

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');


Route::get('distritos/{canton}', 'DireccionController@getDistritos');
Route::get('cantones/{provincia}', 'DireccionController@getCantones');