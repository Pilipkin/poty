<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PicturesController extends Controller
{
    public function index()
    {
        $pictures = Picture::all();
        return view('home', compact('pictures'));
    }

    public function show(Picture $picture)
    {
        return view('pictures.show', compact('picture'));
    }

    public function submit()
    {
        return view('pictures.submit');
    }

    public function storePicture(Request $request)
    {
        if($request->hasFile('picture'))
        {
            $picture = $request->file('picture');
            return $picturePath = $request->file('picture')
                ->storeAs('public/pictures/' . Auth::user()->name,
                    $request->title . '.' . $picture->extension());
        }
        return 'error';
    }
    //test
    public function showPictures()
    {
        return Storage::url('qwe');
    }

}
