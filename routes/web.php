<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/roles', function () {
    // $user = request()->user();
    auth()->user()->refreshPermission('edit posts', 'delete posts');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard')->middleware('role:admin,delete posts');
