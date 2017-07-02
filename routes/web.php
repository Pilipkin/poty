<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::post('/pictures', 'PicturesController@storePicture');
Route::get('/pictures/submit', 'PicturesController@submit');
Route::get('/pictures/{picture}', 'PicturesController@show');


Route::get('/home', 'PicturesController@index');

Route::get('/showGallery', 'GalleryController@index');

Auth::routes();
