<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'backend.dashboard.index', 'uses' => 'DashboardController@index']);
Route::resource('admin', 'AdminController')->names('backend.admin');
