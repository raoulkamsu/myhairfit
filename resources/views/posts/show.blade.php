@extends('layouts.app')

@section('content')

@extends('layouts.search-bar')

@extends('layouts.nav')
    
    @if(count($errors)>0)
    
        <div class="alert alert-info">{{session('message')}}</div>
    @endif
    <div class="container">
        
    <div class=" two column ui grid">
    
        <div class="twelve wide column" id="mainBody">
        <div class="ui segment">
        <div class="ui grid">
            
             <div class="two wide column">
              
            <img class="ui mini image" src="/img/ico.png">
            <span>{{$post->creator->name}}</span>
            
            </div> 
            
        <div class="twelve wide column">
            <div class="ui grid">
            
            <div class="six column">
               <!--  <div class="ui card shape">
               <div class="sides">
            <div class="side active">
                <div class="content">
            <img class="ui fluid rounded image" src="/img/mainbg4.jpg">
                   </div></div>
                     <div class="side">
                      <div class="content">-->
            <img class="ui fluid rounded image" src="/img/mainbg4.jpg"> 
                
                   
                  
                     
            </div>
            </div>
            <h3>{{$post->title}}</h3>
            <div class="ui huge star rating" data-rating="3" data-max-rating="5"></div>
            <h4 class="ui horizontal divider header">
              Description
            </h4>
            <p>{{$post->description}}</p>
            <h4 class="ui horizontal divider header">
           {{$post->replies->count()}} Commentaire(s)
            </h4>
            
           <div class="ui grid">
           <div class="column">
               <div class="ui comments">

               @foreach($post->replies as $reply)
                <div class="comment">
                <a class ="ui top aligned mini image">
                  <img  src="/img/ico.png">
                </a>
                <div class="content">
                  <a class="author">{{$reply->owner->name}} </a>
                  <div class="metadata">
                    <span class="date"> {{$reply->created_at->diffForHumans()}}</span>
                  </div>
                  <div class="text">
                    {{$reply->body}}
                  </div>
                  <div class="actions">
                    <a class="reply">Reply</a>
                  </div>
                </div>
              </div>

        @endforeach  </div>        
                           </div> </div> 
           <div class="column">
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
                        </div>   </div>
            </div>  
           
            
            </div>
        
        </div>
        
        
    <div class="four wide column">
        <div class="ui segment">
    <div class="ui sticky">
            
          <h3>Coisir une Date</h3>
  <div class="ui calendar" id="pickdate">
    <div class="ui input">
      <input type="text" placeholder="Date">
    </div>
  </div>
            
            </div>
        
        </div>
        </div>    
    
        </div>      </div> 
   
    
@endsection
