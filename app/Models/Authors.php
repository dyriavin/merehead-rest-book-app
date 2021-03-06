<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    public function book()
    {
        return $this->belongsToMany(Books::class);
    }
    public function books()
    {
        return $this->hasMany(Books::class);
    }
}
