<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table='photos';

    public function getPathAttribute($value){
        return '/storage/'.$value;
    }

    public function new(){
        return $this->belongsTo('App\Article', 'photo_id');
    }
}
