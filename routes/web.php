<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/pictures', 'PicturesController@storePicture');
Route::get('/pictures/submit', 'PicturesController@submit');
Route::get('/pictures/{picture}', 'PicturesController@showPictures');

Route::get('/show', 'PicturesController@showPictures');


Route::get('/home', 'PicturesController@index');

Auth::routes();
