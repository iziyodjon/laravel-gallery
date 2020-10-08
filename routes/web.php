<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


Route::get('/', 'App\Http\Controllers\ImagesController@index');

Route::get('/about', 'App\Http\Controllers\ImagesController@about');

Route::post('/store','App\Http\Controllers\ImagesController@store');

Route::get('/create','App\Http\Controllers\ImagesController@create');

Route::get('/show/{id}','App\Http\Controllers\ImagesController@show');

Route::get('/edit/{id}','App\Http\Controllers\ImagesController@edit');

Route::post('/update/{id}','App\Http\Controllers\ImagesController@update');

Route::get('/delete/{id}','App\Http\Controllers\ImagesController@delete');
