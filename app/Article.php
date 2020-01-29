<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'news';

    public function photo(){
        return $this->morphOne('App\Photo', 'imageable');
    }
}
