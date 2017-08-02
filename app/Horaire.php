<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Horaire extends Model
{
     protected $fillable = ['post_id', 'lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche'];
 
    public function post()
    {
        return $this->belongsTo('App\Post');
    }
}
