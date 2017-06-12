<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function pictures()
    {
        return $this->hasMany('App\Models\Picture');
    }
}
