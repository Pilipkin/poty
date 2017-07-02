<?php

namespace App;

use App\Models\Picture;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'name'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
