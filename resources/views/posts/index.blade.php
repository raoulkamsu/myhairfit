@extends('layouts.app')

@section('content')

@extends('layouts.search-bar')

@extends('layouts.nav')

<div class="container align-center detail-info">
    
    @if(count($errors)>0)
    
        <div class="alert alert-info">{{session('message')}}</div>
    @endif
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
           
            <div class="ui top attached tabular menu">
   
         <div class="ui left rail">
        <div class="ui segment">
        <h3>Trier</h3>
        <hr>
        <h4>Catégorie:</h4>
        <a href="/posts/">Toutes les categories</a>
            <div class="ui selection dropdown">
    <input type="hidden" name="categorie">
    <i class="dropdown icon"></i>
    <div class="default text">Categorie</div>
    <div class="menu">
       @foreach(DB::table('categories')->join('posts', 'categories.id', '=', 'posts.categorie_id')->get() as $categorie)
         <a href="/posts/{{$categorie->slug}}"><div class="item" data-value="{{$categorie->slug}}">{{$categorie->slug}}</div>  </a>
       @endforeach
  </div>
            </div>
        <hr>
<h4>Prix:</h4>
            <form method="get" action = "{{Request::url()}}?between">
            <div class="ui right mini labeled input">
  <label for="amount" class="ui label">De</label>
  <input type="text" name="priceFrom" placeholder="Amount" id="amountMin">
  <div class="ui basic label">$</div>
</div><br><br>
                     <div class="ui right mini labeled input">
  <label for="amount" class="ui label">A</label>
  <input type="text" name="priceTo" placeholder="Amount" id="amountMax">
  <div class="ui basic label">$</div>
</div>
    <div><a href="{{Request::url()}}" id="priceBetween" class="ui button">
  Mettre à jour
</a> </div>
               
            </form>
            <hr>
            <h4>Distance:<label id="distanceLabel"></label> de <label id="villeLabel"></label></h4>
            <a class="ui button" id="modifierDistance">modifier <i class="edit icon"></i></a> 
            
            <div class="ui mini modal" id="modifierDisactanceModal">
              <div class="header">Personaliser la distance de recherche</div>
                <br><br>
                <form>
              <div class="ui right labeled input">
                  <label>Distance: </label><input type="text" id="distanceInput" name="distance" required>
                  <div class="ui basic label">
                    km
                  </div>
                </div>
                <div class="content">
                  <label>Ville:</label><div class="ui mini input">
                  <input type="text" name="ville" id="villeInput" required>
                </div>
              </div>
                <div class="ui action">
                <button class="ui button" type="submit" class = "distanceSubmited">
                    Valider
                </button>
                </div>
                </form>
            </div>
        </div>
        </div>
                       
   <div class="ui styled fluid accordion">
       @if($posts->isEmpty())
       <div class="ui negative message">
  <i class="close icon"></i>
  <div class="header">
    Désolé aucun résultat pour cette recherche
  </div>
  <p>Modifier les criteres de recherche.
</p></div>
       @endif
  @foreach($posts as $post)
       <div class="title">
   Posté il y'a {{$post->created_at->diffForHumans()}} par <a href="#">{{$post->creator->name}} </a>
           <div class="ui items">
  <div class="item">
    <div class="image">
      <img src="/img/mainbg4.jpg">
    </div>
    <div class="content">
           <div class="ui grid">
        <div class="twelve wide column">
      <a class="header"> {{$post->title}}</a>
               </div>
               <div class="one wide column"><div class="ui tag labels"><a class="ui red label"><h6>{{$post->prixSalon}}$</h6></a></div></div>
        </div>
      <div class="meta">
        <span>Description </span>
      </div>
      <div class="description">
        <p>{{$post->description}}</p>
          
      </div>
      <div class="extra">
          <div class="ui grid">
        <div class="twelve wide column"><div class="ui huge star rating" data-rating="3" data-max-rating="5"></div></div>
        <div class="two wide column"><a class="ui teal labeled icon button" href="/posts/{{$post->categorie->slug}}/{{$post->id}}">Reserver<i class="add icon"></i></a></div>
      </div></div>
    </div>
  </div>
        
  </div>

            </div>
           
       <div class="content">
           <div class="ui grid">
           <div class="column">
               <label>{{ $post->replies()->count() }}<i class="comment icon"></i></label>
               @foreach($post->replies as $reply)
            <div class="ui feed">
  <div class="event">
   <a class="ui image label">
  <img src="/img/ico.png">
  {{$reply->owner->name}} 
</a>
    <div class="content">
      <div class="summary">
      
          <div>{{$reply->body}}</div>
        <div class="date">
          {{$reply->created_at->diffForHumans()}}
        </div>
      </div>
      <div class="meta">
        <a class="like">
          <i class="like icon"></i> 4 Likes
        </a>
      </div>
    </div>
  </div>
</div>        @endforeach 
               </div>
           
           </div>
           @if(auth()->check())
            <form action="{{$post->path().'/replies'}}">
                 {{ csrf_field() }}
                <div class="ui form">
          <div class="field icon">
            <input type="text" rows="2" name="body" placeholder="Laissez un commentaire....">
              <input type="submit" style="display:none"/>
          </div>
              
    </div></form>
           @else
           <p><a href="{{ route('register') }}">Inscrivez</a> vous pour participer à la discution</p>
    @endif

        </div> 
       @endforeach 
        </div>
       
            </div>
    </div>
</div>
    
@endsection
