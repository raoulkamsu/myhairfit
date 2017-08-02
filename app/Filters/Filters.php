<?php

namespace App\Filters;
use Post;
use Illuminate\Http\Request;


abstract class Filters
{
    protected $builder;
    
    protected $request;
    
    protected $filters = [];

public function __construct(Request $request)
{
    $this->request = $request;
}

    public function apply($builder)
    {
            $this->builder = $builder;

            foreach($this->getFilters() as $filter=>$value)
            {
               if(method_exists($this, $filter))
               {
                   $this->$filter($value, $this->request->input('and'));
               }
            }

        return $this->builder;
        //$builder = Post::where('sexe', $genre)->latest()->get(); 
    }
    
    public function getFilters()
    {
       return $this->request->intersect($this->filters);
    }
  
}