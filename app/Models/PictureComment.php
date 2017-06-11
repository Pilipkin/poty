<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PictureComment extends Model
{
    protected $fillable = [
        'body'
    ];

    protected $dates = ['published_at'];

    public function picture()
    {
        return $this->belongsTo('App\Models\Picture');
    }
}