<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::view('setup', 'setup')->middleware('role:student');
