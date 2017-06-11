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


use App\Models\Picture;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome')->with('name','Leha');
});

Route::get('/pictures/{picture}', function ($id){
    $picture = Picture::find($id);
    return view('pictures.show', compact('picture'));
});

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();
