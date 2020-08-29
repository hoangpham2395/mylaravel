<?php

use Illuminate\Support\Facades\Route;

Route::get('/', ['as' => 'frontend.home', 'uses' => 'HomeController@index']);
