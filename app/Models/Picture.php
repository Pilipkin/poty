<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Picture extends Model
{
    protected $fillable = [
        'title',
        'description',
        'path',
        'user_id'
    ];

    public function gallery()
    {
        return $this->belongsTo('App\Models\Gallery');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\PictureComment');
    }

    public function tags()
    {
        return $this->belongsToMany('App\Models\Tag');
    }
}