<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';

    public function photos(){
        return $this->morphMany('App\Photo', 'imageable')->orderBy('created_at', 'DESC');
    }
}
