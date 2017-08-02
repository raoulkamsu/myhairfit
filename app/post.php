<?php

namespace App;

use App\Filters\PostsFilters;
use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $fillable = ['name'];
    
    protected $guarded = [];
    
    public function path()
    {
        return "/posts/{$this->categorie->slug}/{$this->id}";
    }
    
    public function replies()
    {
        return $this->hasMany(PostReply::class);
    }
    
    public function creator()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    
        public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }
    
    public function addReply($reply)
    {
        $this->replies()->create($reply);
    }
    
    public function scopeFilter($query, PostsFilters $filters)
    {
        return $filters->apply($query);
    }
}
