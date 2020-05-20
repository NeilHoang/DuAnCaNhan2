<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $table = 'images';

    public function categories()
    {
        return $this->belongsTo('App\Categories');
    }
    public function reviews()
    {
        return $this->hasMany('App\Review');
    }
}
