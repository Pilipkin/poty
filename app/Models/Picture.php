<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{
    protected $fillable = [
        'title',
        'description',
        'path',
        'user_id'
    ];
    public function user()
    {
        return $this->belongsTo('App\Models\User');
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