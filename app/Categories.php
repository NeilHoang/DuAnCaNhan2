<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';

    public function images()
    {
        return $this->hasMany('App\Images','categories_id');
    }
}
