<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'projects';
    protected $appends = ['slug'];

    public function photos(){
        return $this->morphMany('App\Photo', 'imageable')->orderBy('created_at', 'DESC');
    }

    public function getSlugAttribute(){
        return str_replace(' ', '', ucwords($this->name));
    }
}
