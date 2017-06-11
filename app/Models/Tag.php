<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function pictures()
    {
        return $this->belongsToMany('App\Models\Picture');
    }
}