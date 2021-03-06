<?php

Route::get('/', function () {
//    return view('welcome');
    return redirect('home');
});

Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/users', 'UserController');
Route::resource('/roles', 'RoleController');
Route::resource('/permissions', 'PermissionController');
Route::resource('/posts', 'PostController');
