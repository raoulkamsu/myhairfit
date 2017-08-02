<br>
<br>
<div class="ui menu">
  <div class="item">
    <div class="ui icon input">
      <input type="text" name = "what" id="what" placeholder="quoi...">
      
    </div>
  </div>
  <div class="item">
   <div class="ui selection dropdown">
  <input type="hidden" name="categorie">
  <i class="dropdown icon"></i>
  <div class="default text">Categorie</div>
  <div class="menu">
      <a href="/posts"><div class="item" data-value="all">All</div></a>
       @foreach(DB::table('categories')->join('posts', 'categories.id', '=', 'posts.categorie_id')->get() as $categorie)
         <a href="/posts/{{$categorie->slug}}"><div class="item" data-value="{{$categorie->slug}}">{{$categorie->slug}}</div></a>
         
       @endforeach
  </div>
</div>
	</div>
	  <div class="item">
      <div class="ui selection dropdown">
  <input type="hidden" name="genre">
  <i class="dropdown icon"></i>
  <div class="default text">Pour...</div>
  <div class="menu">
       @foreach(DB::table('genres')->get() as $genre)
      @if(Request::url() === '/posts')
         <a href="/posts?for={{$genre->name}}"><div class="item" data-value="{{$genre->name}}" {{ old('genre') == $genre->id? 'value= $genre->name ':''}} >{{$genre->name}}</div>  </a>
      @else
       <a href="{{Request::url()}}?for={{$genre->name}}"><div class="item" data-value="{{$genre->name}}" {{ old('genre') == $genre->id? 'value= $genre->name ':''}} >{{$genre->name}}</div>  </a>
      @endif
       @endforeach
  </div>
</div>
           
	</div>
  <div class="item">
    <div class="ui action input">
      <input type="text" placeholder="où...">
    </div>
  </div>
</div>
