<?php

namespace App\Filters;

use Post;

use Illuminate\Http\Request;

class PostsFilters  extends Filters
{

    protected $filters = ['for', 'between','like'];
    
    protected function for($genre)
    {
       return $this->builder->where('sexe', $genre)->latest()->get();
    }
    
       protected function between($min,$max)
    {
       return $this->builder->whereBetween('prixSalon', [$min, $max])->latest()->get();
    }
    
        protected function like($world)
    {
       return $this->builder->where('title','like','%'. $world.'%')
                            ->orWhere('description','like','%'. $world.'%')->latest()->get();
    }
}