<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    //defines relationship with table comments
    public function comments()
    {
        return $this->hasMany('App\Comment');
    }
}
