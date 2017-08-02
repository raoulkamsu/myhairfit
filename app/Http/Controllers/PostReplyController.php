<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;

class PostReplyController extends Controller
{
          public function __construct()
    {
        $this->middleware('auth')->only('store');
    }
    
    
    public function store($categorieId, Post $post)
    {
        $post->addReply([
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);
        
        return back();
    }
}
