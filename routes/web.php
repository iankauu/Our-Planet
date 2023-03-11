<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'App\Http\Controllers\PagesController@getHome' );
Route::resource('/news', 'App\Http\Controllers\NewsController' );

