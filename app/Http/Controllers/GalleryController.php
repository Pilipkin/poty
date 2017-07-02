<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $pictures =  Gallery::first()->pictures();
        return view('gallery', compact('pictures'));
    }
}
