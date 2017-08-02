<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadRequest;

use App\post;

use App\Horaire;
use App\Categorie;

use App\Filters\PostsFilters;

use Illuminate\Http\Request;
use Validator;
use View;

class PostController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
            
        $categories = Categorie::latest()->get();
            View::share('categories',$categories);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Categorie $categorie, PostsFilters $filters,Request $request)
    { 
        
            $posts = Post::latest()->filter($filters);
  
        if($categorie->exists)
        {
            $posts->where('categorie_id', $categorie->id);
            /*$postSlug = Categorie::where('slug', $postSlug)->first()->id;
            $posts = Post::where('categorie_id', $postSlug)->latest()->get();*/
            
            // $posts = Post::where(['categorie_id', $postSlug],
                              //  ['sexe', $genre])->latest()->get();
        }
        
        $posts = $posts->get();
        
      
        return view('posts.index', compact('posts'));
    }

        protected function validator(array $data)
    {
 
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data)
    {
       
    }
    
      public function showcreate()
    {
        $categories = Categorie::latest()->get();
        return view('posts.create', compact('categories'));
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $validator = Validator::make($request->all(), [
            'title' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|',
            'description' => 'required|string|min:8',
            'categorie' => 'required|exists:categories,id',
            'prix' => 'required|numeric',
            'prixdomicile' => 'numeric',
            'city' => 'require|string|min:3',
            'adress' => 'require|string',
            
            
            /*'image1' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image2' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image3' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image4' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image5' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image6' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image7' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image8' => 'image|mimes:jpeg,bmp,png|size:2000',*/
        ]);
        
          if ($validator->fails()) {
            return redirect('posts/create')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $post = new post();
        $post->title = $request->get('title');
        $post->email = $request->get('email');
        $post->description = $request->get('description');
        $post->prixSalon = $request->get('prix');
        $post->prixdomicile = $request->get('prixdomicile');
        $post->zip = $request->get('zip');
        $post->city = $request->get('city');
        $post->adress = $request->get('adress');
        $post->phone = $request->get('phone');
        $post->sexe = $request->get('sexe');
        $post->typeCheveux = $request->get('typeCheveux');
        $post->distanceDeplacement = $request->get('distanceMax');
        
        $post->user_id = auth()->id();
        $post->categorie_id = $request->get('categorie');
        $post->save();
        $horaire = new Horaire();
        $horaire->post_id = $post->id;
        $horaire->lundi = implode($request->get('hoursLundi'));
        $horaire->mardi = implode($request->get('hoursMardi'));
        $horaire->mercredi = implode($request->get('hoursMercredi'));
        $horaire->jeudi = implode($request->get('hoursJeudi'));
        $horaire->vendredi = implode($request->get('hoursVendredi'));
        $horaire->samedi = implode($request->get('hoursSamedi'));
        $horaire->dimanche = implode($request->get('hoursDimanche'));
        $horaire->save();
        
        
        //Post::create( request(['user_id'=>auth()->id(),'title','email','description','prix','prixdomicile','categorie','categorie','sexe','distanceMax']));
        
        /*$filename = request(['image1'])->store('image1');
        
        PostsPhoto::create([
            'post_id' => $post->id,
            'filname'=>$filname
        ]);
        $filename = request(['image2'])->store('image2');
        PostsPhoto::create([
            'post_id' => $post->id,
            'filname'=>$filname
        ]);
         $filename = request(['image3'])->store('image3');
        PostsPhoto::create([
            'post_id' => $post->id,
            'filname'=>$filname
        ]);
         $filename = request(['image4'])->store('image4');
        PostsPhoto::create([
            'post_id' => $post->id,
            'filname'=>$filname
        ]);
         $filename = request(['image5'])->store('image5');
        PostsPhoto::create([
            'post_id' => $post->id,
            'filname'=>$filname
        ]);
         $filename = request(['image6'])->store('image6');
        PostsPhoto::create([
            'post_id' => $post->id,
            'filname'=>$filname
        ]);
         $filename = request(['image7'])->store('image7');
        PostsPhoto::create([
            'post_id' => $post->id,
            'filname'=>$filname
        ]);
         $filename = request(['image8'])->store('image8');
        PostsPhoto::create([
            'post_id' => $post->id,
            'filname'=>$filname
        ]);*/
        
        return redirect()->route('posts')->with('flash', 'Votre annonce a bien été publiée!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($categorieId, post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $validator = Validator::make($request->all(), [
            'title' => 'required|string|min:5|max:255',
            'email' => 'required|string|email|max:255|',
            'description' => 'required|string|min:8',
            'categorie' => 'required|exists:categories,id',
            'prix' => 'required|numeric',
            'prixdomicile' => 'numeric',
            
            
            /*'image1' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image2' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image3' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image4' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image5' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image6' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image7' => 'image|mimes:jpeg,bmp,png|size:2000',
            'image8' => 'image|mimes:jpeg,bmp,png|size:2000',*/
        ]);
        
          if ($validator->fails()) {
            return redirect('/home')
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $post= post::find($id);
        $post->title = $request->get('title');
        $post->email = $request->get('email');
        $post->description = $request->get('description');
        $post->prixSalon = $request->get('prix');
        $post->prixdomicile = $request->get('prixdomicile');
        $post->phone = $request->get('phone');
        $post->sexe = $request->get('sexe');
        $post->typeCheveux = $request->get('typeCheveux');
        $post->distanceDeplacement = $request->get('distanceMax');
        
        $post->categorie_id = $request->get('categorie');
        $post->save();
        $horaire = Horaire::find($post->id);
        $horaire->lundi = implode($request->get('hoursLundi'));
        $horaire->mardi = implode($request->get('hoursMardi'));
        $horaire->mercredi = implode($request->get('hoursMercredi'));
        $horaire->jeudi = implode($request->get('hoursJeudi'));
        $horaire->vendredi = implode($request->get('hoursVendredi'));
        $horaire->samedi = implode($request->get('hoursSamedi'));
        $horaire->dimanche = implode($request->get('hoursDimanche'));
        $horaire->save();
        
         return redirect('/home')->with('message', 7);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($categorie, post $post)
    {
        
        $post->replies()->delete();
        $post->delete();
        
      /*  if(request()->wantsJason())
        {
                    return response([], 204);
        }*/
        
        return redirect('/home')->with('error_code', 5);
    }
}
