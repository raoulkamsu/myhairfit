<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function getRouteKeyName()
    {
        return 'slug';
    }
    
    public function categorie()
    {
        return $this->hasMany(Post::class);
    }
}
