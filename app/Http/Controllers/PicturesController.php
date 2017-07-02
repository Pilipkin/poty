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
            $requestPicture = $request->file('picture');
            $picture = new Picture;
            $picture->gallery_id = 1;
            $picture->title = $request->title;
            $picture-> description = $request->description;
            $picturePath = $requestPicture
                ->storeAs('public/pictures/' . Auth::user()->name,
                    md5($picture->title . Auth::user()->id) . '.' . $requestPicture->extension());
            $picture->path = $picturePath;
            $picture->save();
            return $picturePath;
        }
        return 'error';
    }

}
