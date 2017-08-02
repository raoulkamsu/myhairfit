<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
use App\User;
use App\Categorie;
use View;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
           $categories = Categorie::latest()->get();
            View::share('categories',$categories);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = post::where('user_id',auth()->id())
               ->orderBy('created_at', 'desc')
               ->get();
        
        return view('home', compact('posts'));
    }
}
