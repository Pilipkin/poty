<?php

namespace App\Models;

use App\Gallery;
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

    public function galleries()
    {
        return $this->belongsTo(Gallery::class);
    }

    public function comments()
    {
        return $this->hasMany(PictureComment::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
}