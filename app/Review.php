<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function image()
    {
        return $this->belongsTo('App\Images');
    }
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
