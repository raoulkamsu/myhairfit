@extends('layouts.app')

@section('content')

@extends('layouts.search-bar')

@extends('layouts.nav')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <p></p>
                   <div class="computer only row">
            <div class="ui pointing  menu">
              <a class="active item" data-tab="TB">Tableau de bord</a>
              <a class="item" data-tab="inbox">Boite de reception</a>
              <a class="item" data-tab="annonce">Mes annonces</a>
              <a class="item" data-tab="profil">Profil</a>
              <a class="item" data-tab="compte">Compte</a>
              <a class="item" data-tab="credit">Credit coiffure</a>
            </div>
               <div class="ui active tab segment" data-tab="TB">
              <div class="ui grid">
               <div class="ui message">
                  <i class="close icon"></i>
                  <div class="header">
                    <i class="dollar icon"></i> Gagnez 25$ de credit....
                  </div>
                  <p>Offrez à vos amis une remise de $50 CAD sur leur premier voyage avec Airbnb et profitez également de $120 CAD de crédit voyage.</p>
                    <button class="ui secondary button">
                      <i class="icon user"></i>
                      Inviter des amis
                    </button>
                </div>

                <div class="ui grid">
    <div class=" seven wide column"> 
      <div class="ui special cards">
              <div class="card">
                <div class="blurring dimmable image">
                  <div class="ui dimmer">
                    <div class="content">
                      <div class="center">
                        <div class="ui inverted button">Profil</div>
                      </div>
                    </div>
                  </div>
                  <img src="/img/avatar/tom.jpg">
                </div>
                <div class="content">
                  <a class="header">{{ Auth::user()->name }}</a>
                  <div class="meta">
                    <span class="date">Create in Sep 2014</span>
                  </div>
                </div>
                <div class="extra content">
                  <a>
                    <i class="users icon"></i>
                    parrain de 2 Members
                  </a>
                </div>
              </div>
            </div>  
        </div>
  <div class=" nine wide column">
                    
      <div class="ui card">
  <div class="content">
    <div class="header">Bienvenue sur Myhairfit, {{ Auth::user()->name }} !</div>
  </div>
  <div class="content">
    <h4 class="ui sub header">Activity</h4>
    <div class="ui small feed">
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Elliot Fu</a> added <a>Jenny Hess</a> to the project
          </div>
        </div>
      </div>
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Stevie Feliciano</a> was added as an <a>Administrator</a>
          </div>
        </div>
      </div>
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Helen Troy</a> added two pictures
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="extra content">
    <button class="ui button">Join Project</button>
  </div>
</div>
    
            <div class="ui card">
  <div class="content">
    <div class="header">Notifications</div>
  </div>
  <div class="content">
    <h4 class="ui sub header">Activity</h4>
    <div class="ui small feed">
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Elliot Fu</a> added <a>Jenny Hess</a> to the project
          </div>
        </div>
      </div>
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Stevie Feliciano</a> was added as an <a>Administrator</a>
          </div>
        </div>
      </div>
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Helen Troy</a> added two pictures
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="extra content">
    <button class="ui button">Join Project</button>
  </div>
</div>
      
            <div class="ui card">
  <div class="content">
    <div class="header">Messages</div>
  </div>
  <div class="content">
    <h4 class="ui sub header">Activity</h4>
    <div class="ui small feed">
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Elliot Fu</a> added <a>Jenny Hess</a> to the project
          </div>
        </div>
      </div>
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Stevie Feliciano</a> was added as an <a>Administrator</a>
          </div>
        </div>
      </div>
      <div class="event">
        <div class="content">
          <div class="summary">
             <a>Helen Troy</a> added two pictures
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="extra content">
    <button class="ui button">Join Project</button>
  </div>
</div>
                    
                    </div>
</div>
               
            </div>
            </div>   
            <!--inbox-->
            <div class="ui tab segment" data-tab="inbox">
              <div class="ui grid">
            <div class="ui message">
                  <i class="close icon"></i>
                  <div class="header">
                    <i class="dollar icon"></i> Gagnez 25$ de credit....
                  </div>
                  <p>Offrez à vos amis une remise de $50 CAD sur leur premier voyage avec Airbnb et profitez également de $120 CAD de crédit voyage.</p>
                    <button class="ui secondary button">
                      <i class="icon user"></i>
                      Inviter des amis
                    </button>
                </div>

              <div class="four wide column">
              <div class="ui vertical attached tabular menu">
                <a class="active item" data-tab="inbox/a">
                 <div class="ui small teal label">1</div>
                 <p>Inbox</p> </a>
                <a class="item" data-tab="inbox/b"><div class="ui small label">51</div>
                 <p>Favoris</p></a>
                <a class="item" data-tab="inbox/c"><div class="ui small label">51</div>
                 <p>Reservation</p></a>
              </div>
              </div>
              <div class="twelve wide stretched column">
              <div class="ui vertical attached active tab segment" data-tab="inbox/a"><p>1A</p></div>
              <div class="ui vertical attached tab segment" data-tab="inbox/b">1B</div>
              <div class="ui vertical attached tab segment" data-tab="inbox/c"\>1C</div>
              </div>
            </div>
            </div> 
            <!--annonces-->
                        <div class="ui tab segment" data-tab="annonce">
              <div class="ui grid">
            <div class="ui message">
                  <i class="close icon"></i>
                  <div class="header">
                    <i class="dollar icon"></i> Gagnez 25$ de credit....
                  </div>
                  <p>Offrez à vos amis une remise de $50 CAD sur leur premier voyage avec Airbnb et profitez également de $120 CAD de crédit voyage.</p>
                    <button class="ui secondary button">
                      <i class="icon user"></i>
                      Inviter des amis
                    </button>
                </div>

              <div class="four wide column">
               <div class="ui vertical attached tabular menu">
                <a class="active item" data-tab="annonce/a">
                 <p>Annonces</p> </a>
                <a class="item" data-tab="annonce/b">
                 <p>Mes réservations</p></a>
              </div>
              </div>
              <div class="twelve wide stretched column">
                  <div class="contain">
                      <div class="ui vertical attached active tab segment" data-tab="annonce/a" id="user">
                       @forelse($posts as $post)
                        
                          
                          <div class="ui items">
                          <div class="item">
                            <div class="image">
                              <img src="/img/abc.png">
                            </div>
                            <div class="content">
                              <a class="header"> {{$post->title}}</a>
                              <div class="meta">
                                <span>Description </span>
                              </div>
                              <div class="description">
                                <p>{{$post->description}}</p>

                              </div>
                              <div class="extra">
                                <div class="ui huge star rating" data-rating="3" data-max-rating="5"></div>
                               <div> <a class="ui button" id="update" ><i class="edit icon"></i> Modifier</a>
                                <!-- Modal Update -->
                                  </div>
                                 
                                   <div class="ui longer modal" id="postUpdate">
                                  <div class="header">Mettez votre annonce à jour</div>
                                  <div class="scrolling content">
                                    
                                
                                     <form class="ui form" method="post" action="/posts/update/{{$post->id}}">
                                            {{csrf_field()}}
                                            {{method_field('PUT')}}
                                           
                                            <div class="ui segment">
                                            <div class="field">
                                                 <div class="field">
                                                <label>Catégorie</label>
                                                <select class="ui dropdown" id="type" name="categorie"required>
                                                    <option value="">Categorie</option>
                                                   @foreach($categories as $categorie)
                                                    <option value="{{$categorie->id}}" {{ $post->categorie_id == $categorie->id? 'selected':''}} >{{$categorie->slug}}</option>  
                                                   @endforeach
                                                </select>
                                                </div>
                                                
                                                 <div class="field">
                                                <label>Type de cheveux</label>
                                                <select class="ui dropdown" id="type" name="typeCheveux" required>
                                                    <option value=""></option>  
                                                    <option value="cocasien">cocasien</option>  
                                                    <option value="afro">Afro</option>
                                                    </select>
                                                </div>
                                                
                                                 <div class="field">
                                                <label>Genre</label>
                                                <select class="ui dropdown" id="type" name="sexe" required>
                                                    <option value=""></option>  
                                                    <option value="Homme">Homme</option>  
                                                    <option value="Femme">Femme</option>
                                                    </select>
                                                </div>
                                                
                                                <div class="field">
                                                <label>Distance Max</label>
                                                <select class="ui dropdown" id="type" name="distanceMax" required>
                                                    <option value=""></option>  
                                                    <option value="10km">10km</option>  
                                                    <option value="20km">20km</option>
                                                    <option value="30km">30km</option>
                                                    <option value="40km">40km</option>
                                                    <option value="50km">50km</option>
                                                    <option value="60km">60km</option>
                                                    </select>
                                                    </div>
                                            </div>
                                            </div>
                                           <div class="ui segment">
                                          <div class="field">
                                            <label>Titre</label>
                                            <input type="text" name="title" value = "{{$post->title}}" required>
                                          </div>
                                           <div class="field">
                                            <label>Description</label>
                                               <textarea name="description" required>{{$post->description}}</textarea>
                                          </div>
                                        </div>
                                        <div class="ui segment">
                                          <div class="field">
                                              <div class="ui right labeled input">
                                              <label for="amount" class="ui label">prix</label>
                                              <input type="text" name="prix" value="{{$post->prixSalon}}" id="amount" required>
                                              <div class="ui basic label">.00</div>
                                            </div>
                                          </div>
                                              <div class="field">
                                              <div class="ui right labeled input">
                                              <label for="amount" class="ui label">prix domicile</label>
                                              <input type="text" name="prixdomicile" value="{{$post->prixDomicile}}" id="amount" required>
                                              <div class="ui basic label">.00</div>
                                            </div>
                                          </div>
                                           <div class="field">
                                            <label>Telephone</label>
                                               <div class="ui left icon input">
                                               <input type="text" name="phone" value="{{$post->phone}}" required>
                                                <i class="call icon"></i>
                                                </div>
                                          </div>
                                              <div class="ui left icon field">
                                            <label>Email</label>
                                                  <div class="ui left icon input">
                                              <input type="text" name="email" value="{{$post->email}}" required>
                                                <i class="mail icon"></i>
                                                  </div>
                                          </div>
                                        </div>
                                            <div class="ui segment">
                                            <div class="field">
                                            
                                                                        <table class="ui very basic  table">
  <thead>
    <tr><th>Jours</th>
    <th>Horaire</th>
  </tr></thead>
  <tbody>
    <tr>
      <td>
       Lundi</td>
      <td>
                                <div class="ui fluid multiple search selection dropdown">
  <input name="hoursLundi[]" type="hidden">
  <i class="dropdown icon"></i>
  <div class="default text">Horaire</div>
  <div class="menu">
    <div class="item" data-value="00:00-01:00">00:00-01:00</div>
<div class="item" data-value="01:00-02:00">01:00-02:00</div>
<div class="item" data-value="02:00-03:00">02:00-03:00</div>
<div class="item" data-value="04:00-05:00">04:00-05:00</div>
<div class="item" data-value="05:00-06:00">05:00-06:00</div>
<div class="item" data-value="06:00-07:00">06:00-07:00</div>
<div class="item" data-value="08:00-09:00">08:00-09:00</div>
<div class="item" data-value="10:00-11:00">10:00-11:00</div>
<div class="item" data-value="11:00-12:00">11:00-12:00</div>
<div class="item" data-value="12:00-13:00">12:00-13:00</div>
<div class="item" data-value="13:00-14:00">13:00-14:00</div>
<div class="item" data-value="14:00-15:00">14:00-15:00</div>
<div class="item" data-value="15:00-16:00">15:00-16:00</div>
<div class="item" data-value="16:00-17:00">16:00-17:00</div>
<div class="item" data-value="17:00-18:00">17:00-18:00</div>
<div class="item" data-value="18:00-19:00">18:00-19:00</div>
<div class="item" data-value="19:00-20:00">19:00-20:00</div>
<div class="item" data-value="21:00-22:00">21:00-22:00</div>
<div class="item" data-value="22:00-23:00">22:00-23:00</div>
<div class="item" data-value="23:00-00:00">23:00-00:00</div>
  </div>
</div>
      </td>
    </tr>
    <tr>
      <td>
        Mardi</td>
      <td>
                                <div class="ui fluid multiple search selection dropdown">
  <input name="hoursMardi[]" type="hidden">
  <i class="dropdown icon"></i>
  <div class="default text">Horaire</div>
  <div class="menu">
    <div class="item" data-value="00:00-01:00">00:00-01:00</div>
<div class="item" data-value="01:00-02:00">01:00-02:00</div>
<div class="item" data-value="02:00-03:00">02:00-03:00</div>
<div class="item" data-value="04:00-05:00">04:00-05:00</div>
<div class="item" data-value="05:00-06:00">05:00-06:00</div>
<div class="item" data-value="06:00-07:00">06:00-07:00</div>
<div class="item" data-value="08:00-09:00">08:00-09:00</div>
<div class="item" data-value="10:00-11:00">10:00-11:00</div>
<div class="item" data-value="11:00-12:00">11:00-12:00</div>
<div class="item" data-value="12:00-13:00">12:00-13:00</div>
<div class="item" data-value="13:00-14:00">13:00-14:00</div>
<div class="item" data-value="14:00-15:00">14:00-15:00</div>
<div class="item" data-value="15:00-16:00">15:00-16:00</div>
<div class="item" data-value="16:00-17:00">16:00-17:00</div>
<div class="item" data-value="17:00-18:00">17:00-18:00</div>
<div class="item" data-value="18:00-19:00">18:00-19:00</div>
<div class="item" data-value="19:00-20:00">19:00-20:00</div>
<div class="item" data-value="21:00-22:00">21:00-22:00</div>
<div class="item" data-value="22:00-23:00">22:00-23:00</div>
<div class="item" data-value="23:00-00:00">23:00-00:00</div>
  </div>
</div>
      </td>
    </tr>
    <tr>
      <td>
        Mercredi</td>
      <td>
                                <div class="ui fluid multiple search selection dropdown">
  <input name="hoursMercredi[]" type="hidden">
  <i class="dropdown icon"></i>
  <div class="default text">Horaire</div>
  <div class="menu">
    <div class="item" data-value="00:00-01:00">00:00-01:00</div>
<div class="item" data-value="01:00-02:00">01:00-02:00</div>
<div class="item" data-value="02:00-03:00">02:00-03:00</div>
<div class="item" data-value="04:00-05:00">04:00-05:00</div>
<div class="item" data-value="05:00-06:00">05:00-06:00</div>
<div class="item" data-value="06:00-07:00">06:00-07:00</div>
<div class="item" data-value="08:00-09:00">08:00-09:00</div>
<div class="item" data-value="10:00-11:00">10:00-11:00</div>
<div class="item" data-value="11:00-12:00">11:00-12:00</div>
<div class="item" data-value="12:00-13:00">12:00-13:00</div>
<div class="item" data-value="13:00-14:00">13:00-14:00</div>
<div class="item" data-value="14:00-15:00">14:00-15:00</div>
<div class="item" data-value="15:00-16:00">15:00-16:00</div>
<div class="item" data-value="16:00-17:00">16:00-17:00</div>
<div class="item" data-value="17:00-18:00">17:00-18:00</div>
<div class="item" data-value="18:00-19:00">18:00-19:00</div>
<div class="item" data-value="19:00-20:00">19:00-20:00</div>
<div class="item" data-value="21:00-22:00">21:00-22:00</div>
<div class="item" data-value="22:00-23:00">22:00-23:00</div>
<div class="item" data-value="23:00-00:00">23:00-00:00</div>
  </div>
</div>
      </td>
    </tr>
    <tr>
      <td>
        Jeudi</td>
      <td>
                                <div class="ui fluid multiple search selection dropdown">
  <input name="hoursJeudi[]" type="hidden">
  <i class="dropdown icon"></i>
  <div class="default text">Horaire</div>
  <div class="menu">
    <div class="item" data-value="00:00-01:00">00:00-01:00</div>
<div class="item" data-value="01:00-02:00">01:00-02:00</div>
<div class="item" data-value="02:00-03:00">02:00-03:00</div>
<div class="item" data-value="04:00-05:00">04:00-05:00</div>
<div class="item" data-value="05:00-06:00">05:00-06:00</div>
<div class="item" data-value="06:00-07:00">06:00-07:00</div>
<div class="item" data-value="08:00-09:00">08:00-09:00</div>
<div class="item" data-value="10:00-11:00">10:00-11:00</div>
<div class="item" data-value="11:00-12:00">11:00-12:00</div>
<div class="item" data-value="12:00-13:00">12:00-13:00</div>
<div class="item" data-value="13:00-14:00">13:00-14:00</div>
<div class="item" data-value="14:00-15:00">14:00-15:00</div>
<div class="item" data-value="15:00-16:00">15:00-16:00</div>
<div class="item" data-value="16:00-17:00">16:00-17:00</div>
<div class="item" data-value="17:00-18:00">17:00-18:00</div>
<div class="item" data-value="18:00-19:00">18:00-19:00</div>
<div class="item" data-value="19:00-20:00">19:00-20:00</div>
<div class="item" data-value="21:00-22:00">21:00-22:00</div>
<div class="item" data-value="22:00-23:00">22:00-23:00</div>
<div class="item" data-value="23:00-00:00">23:00-00:00</div>
  </div>
</div>
      </td>
    </tr>
      <tr>
      <td>Vendredi</td>
      <td>                        <div class="ui fluid multiple search selection dropdown">
  <input name="hoursVendredi[]" type="hidden">
  <i class="dropdown icon"></i>
  <div class="default text">Horaire</div>
  <div class="menu">
    <div class="item" data-value="00:00-01:00">00:00-01:00</div>
<div class="item" data-value="01:00-02:00">01:00-02:00</div>
<div class="item" data-value="02:00-03:00">02:00-03:00</div>
<div class="item" data-value="04:00-05:00">04:00-05:00</div>
<div class="item" data-value="05:00-06:00">05:00-06:00</div>
<div class="item" data-value="06:00-07:00">06:00-07:00</div>
<div class="item" data-value="08:00-09:00">08:00-09:00</div>
<div class="item" data-value="10:00-11:00">10:00-11:00</div>
<div class="item" data-value="11:00-12:00">11:00-12:00</div>
<div class="item" data-value="12:00-13:00">12:00-13:00</div>
<div class="item" data-value="13:00-14:00">13:00-14:00</div>
<div class="item" data-value="14:00-15:00">14:00-15:00</div>
<div class="item" data-value="15:00-16:00">15:00-16:00</div>
<div class="item" data-value="16:00-17:00">16:00-17:00</div>
<div class="item" data-value="17:00-18:00">17:00-18:00</div>
<div class="item" data-value="18:00-19:00">18:00-19:00</div>
<div class="item" data-value="19:00-20:00">19:00-20:00</div>
<div class="item" data-value="21:00-22:00">21:00-22:00</div>
<div class="item" data-value="22:00-23:00">22:00-23:00</div>
<div class="item" data-value="23:00-00:00">23:00-00:00</div>
  </div>
</div></td>
      </tr>
      <tr>
      <td>Samedi</td>
      <td>                        <div class="ui fluid multiple search selection dropdown">
  <input name="hoursSamedi[]" type="hidden">
  <i class="dropdown icon"></i>
  <div class="default text">Horaire</div>
  <div class="menu">
    <div class="item" data-value="00:00-01:00">00:00-01:00</div>
<div class="item" data-value="01:00-02:00">01:00-02:00</div>
<div class="item" data-value="02:00-03:00">02:00-03:00</div>
<div class="item" data-value="04:00-05:00">04:00-05:00</div>
<div class="item" data-value="05:00-06:00">05:00-06:00</div>
<div class="item" data-value="06:00-07:00">06:00-07:00</div>
<div class="item" data-value="08:00-09:00">08:00-09:00</div>
<div class="item" data-value="10:00-11:00">10:00-11:00</div>
<div class="item" data-value="11:00-12:00">11:00-12:00</div>
<div class="item" data-value="12:00-13:00">12:00-13:00</div>
<div class="item" data-value="13:00-14:00">13:00-14:00</div>
<div class="item" data-value="14:00-15:00">14:00-15:00</div>
<div class="item" data-value="15:00-16:00">15:00-16:00</div>
<div class="item" data-value="16:00-17:00">16:00-17:00</div>
<div class="item" data-value="17:00-18:00">17:00-18:00</div>
<div class="item" data-value="18:00-19:00">18:00-19:00</div>
<div class="item" data-value="19:00-20:00">19:00-20:00</div>
<div class="item" data-value="21:00-22:00">21:00-22:00</div>
<div class="item" data-value="22:00-23:00">22:00-23:00</div>
<div class="item" data-value="23:00-00:00">23:00-00:00</div>
  </div>
</div></td>
      
      </tr>
      <tr>
      <td>Dimanche</td>
      <td>                        <div class="ui fluid multiple search selection dropdown">
  <input name="hoursDimanche[]" type="hidden">
  <i class="dropdown icon"></i>
  <div class="default text">Horaire</div>
  <div class="menu">
    <div class="item" data-value="00:00-01:00">00:00-01:00</div>
<div class="item" data-value="01:00-02:00">01:00-02:00</div>
<div class="item" data-value="02:00-03:00">02:00-03:00</div>
<div class="item" data-value="04:00-05:00">04:00-05:00</div>
<div class="item" data-value="05:00-06:00">05:00-06:00</div>
<div class="item" data-value="06:00-07:00">06:00-07:00</div>
<div class="item" data-value="08:00-09:00">08:00-09:00</div>
<div class="item" data-value="10:00-11:00">10:00-11:00</div>
<div class="item" data-value="11:00-12:00">11:00-12:00</div>
<div class="item" data-value="12:00-13:00">12:00-13:00</div>
<div class="item" data-value="13:00-14:00">13:00-14:00</div>
<div class="item" data-value="14:00-15:00">14:00-15:00</div>
<div class="item" data-value="15:00-16:00">15:00-16:00</div>
<div class="item" data-value="16:00-17:00">16:00-17:00</div>
<div class="item" data-value="17:00-18:00">17:00-18:00</div>
<div class="item" data-value="18:00-19:00">18:00-19:00</div>
<div class="item" data-value="19:00-20:00">19:00-20:00</div>
<div class="item" data-value="21:00-22:00">21:00-22:00</div>
<div class="item" data-value="22:00-23:00">22:00-23:00</div>
<div class="item" data-value="23:00-00:00">23:00-00:00</div>
  </div>
</div></td>
      </tr>
  </tbody>
                        </table>
                                            </div>
                                            </div>
                                            <div class="ui segment">
                                            <div class="field">
                             <div class="ui four cards">
                           <div class="card">
					<input type="file" name="image1" id="img1" class="inputfile inputfile-1" />
					<label for="img1"><figure id="file1"></figure> <span></span></label></div>
                      <div class="card">
					<input type="file" name="image2" id="image2" class="inputfile inputfile-2" />
					<label for="image2"><figure id="file2"></figure> <span></span></label></div>
                     <div class="card">
					<input type="file" name="image3" id="image3" class="inputfile inputfile-3" />
					<label for="image3"><figure id="file3"></figure> <span></span></label></div>
                     <div class="card">
					<input type="file" name="image4" id="image4" class="inputfile inputfile-4" />
					<label for="image4"><figure id="file4"></figure> <span></span></label></div>
                                 
                             <div class="card">
					<input type="file" name="image5" id="image5" class="inputfile inputfile-5" />
					<label for="image5"><figure id="file5"></figure> <span></span></label></div>
                      <div class="card">
					<input type="file" name="image6" id="image6" class="inputfile inputfile-6" />
					<label for="image6"><figure id="file6"></figure> <span></span></label></div>
                     <div class="card">
					<input type="file" name="image7" id="image7" class="inputfile inputfile-7" />
					<label for="image7"><figure id="file7"></figure> <span></span></label></div>
                     <div class="card">
					<input type="file" name="image8" id="image8" class="inputfile inputfile-8" />
					<label for="image8"><figure id="file8"></figure> <span></span></label></div>
                        </div>
                        </div>           
                           </div>
                                      <div class="action">
                                          <button class="ui button" type="submit">Submit</button>
                                           </div>
                                            
                                        </form>
                                       </div>
                                  </div>
                                     @if((Session::get('message') == 7) )
                        <script>
                        $(function() {
                            $('#postUpdated').modal('show');
                        });
                        </script>
                        @endif
                                   <div class="ui mini modal" id="postUpdated">
                                  <div class="header">Confirmation</div>
                                  <div class="content">
                                      <span>Votre annonce est à jour <i class="checkmark icon"></i></span>
                                       </div>
                                       <div class="action">  <button class="ui cancel button" type="submit">Ok</button></div>
                                  </div>
                                  
                                <a class="negative ui button" id="delete"><i class="trash outline icon"></i>Supprimer</a></div></div>
                                     <!-- Modal delete -->
                          
                          <div class="ui basic modal" id="confirmDelete">
                          <div class="ui icon header">
                            <i class="trash outline icon"></i>
                            Supprimer annonce
                          </div>
                          <div class="content">
                            Votre annonce sera supprimée définitivement. Voulez-vous continuer?
                          </div>
                          <div class="actions">
                            <div class="ui red basic cancel inverted button">
                              <i class="remove icon"></i>
                              Non
                            </div>
                              <form action="{{$post->path()}}" method="post">
                                  {{csrf_field()}}
                                  {{method_field('DELETE')}}
                            <button type="submit" class="ui green ok inverted button">
                              <i class="checkmark icon"></i>
                              Oui
                            </button>
                                  </form>
                          </div>
                        </div>
                        
                              </div>
                            </div>
                          </div>

                          </div>
                        @empty
                          
                       
                            <h1>Vous n'avez pas d'annonces!</h1>
                  <p>Gagnez de l'argent en offrant vos services de beauté sur Myhairfit.</p>
                  <a href="{{route('posts.create')}}" class="ui secondary button">
                  Ajouter une annonce
                </a>
                      @endforelse
                          @if((Session::get('error_code') == 5)) 
                        <script>
                        $(function() {
                            $('#confirmDelete').modal('show');
                        });
                        </script>
                        @endif
                      <div class="ui mini modal" id="confirmDelete">
                      <div class="header">Confirmation</div>
                      <div class="content">
                        <p>Votre annonce à bien été supprimé</p>
                      </div>
                      <div class="actions">
                        <div class="ui approve button">Ok</div>
                      </div>
                    </div>
            </div>
              <div class="ui vertical attached tab segment" data-tab="annonce/b">
                  <table class="ui compact celled definition table">
  <thead class="full-width">
    <tr>
      <th>Statut</th>
      <th>Name</th>
      <th>Registration Date</th>
      <th>E-mail address</th>
      <th>Premium Plan</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>John Lilki</td>
      <td>September 14, 2013</td>
      <td>jhlilk22@yahoo.com</td>
      <td>No</td>
    </tr>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>Jamie Harington</td>
      <td>January 11, 2014</td>
      <td>jamieharingonton@yahoo.com</td>
      <td>Yes</td>
    </tr>
    <tr>
      <td class="collapsing">
        <div class="ui fitted slider checkbox">
          <input type="checkbox"> <label></label>
        </div>
      </td>
      <td>Jill Lewis</td>
      <td>May 11, 2014</td>
      <td>jilsewris22@yahoo.com</td>
      <td>Yes</td>
    </tr>
  </tbody>
  <tfoot class="full-width">
    <tr>
      <th></th>
      <th colspan="4">
        <div class="ui right floated small primary labeled icon button">
          <i class="user icon"></i> Add User
        </div>
        <div class="ui small  button">
          Approve
        </div>
        <div class="ui small  disabled button">
          Approve All
        </div>
      </th>
    </tr>
  </tfoot>
</table></div>
              </div>
            </div>
          
                       
            <!-- profil -->
        
                   <div class="ui tab segment" data-tab="profil">
              <div class="ui grid">
            <div class="ui message">
                  <i class="close icon"></i>
                  <div class="header">
                    <i class="dollar icon"></i> Gagnez 25$ de credit....
                  </div>
                  <p>Offrez à vos amis une remise de $50 CAD sur leur premier voyage avec Airbnb et profitez également de $120 CAD de crédit voyage.</p>
                    <button class="ui secondary button">
                      <i class="icon user"></i>
                      Inviter des amis
                    </button>
                </div>

              <div class="four wide column">
              <div class="ui vertical attached tabular menu">
                <a class="active item" data-tab="profil/a">                 
                 <p>Informations</p> </a>
                <a class="item" data-tab="profil/b">
                 <p>Parrainage</p></a>
              </div>
              </div>
              <div class="twelve wide stretched column">
              <div class="ui vertical attached active tab segment" data-tab="profil/a">
                   <!--Profil-->
                       <div class="ui grid">
                  
  <div class="sixteen wide column">
      <div class="contain">
                    @if((Session::get('message') == 6) )
                        <script>
                        $(function() {
                            $('#confirmUpdate').modal('show');
                        });
                        </script>
                        @endif
                      <div class="ui mini modal" id="confirmUpdate">
                      <div class="header">Confirmation</div>
                      <div class="content">
                        <p>Votre profil à bien été mis à jour</p>
                      </div>
                      <div class="actions">
                        <div class="ui approve button">Ok</div>
                      </div>
                    </div>
       <form class="ui form" method="post" action="/home/update/{{Auth::user()->id}}">
                      {{csrf_field()}}
                       {{ method_field('PUT') }}     
      <div class="ui card" id="user">
      
  <div class="content">
    <div class="header">Obligatoire</div>
  </div>
        
  <div class="content">
   <!--email-->
      <div class="inline field">
          <div class="ui stackable two column grid">
              <div class="column"><label>Courriel</label></div>
        <div class="column"><input type="text" name="email" value="{{ Auth::user()->email }}" required></div>
    </div>
      </div></div>
  @if ($errors->has('phone'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('email') }}</p>
  </div>
    @endif 
  <!-- Name-->        
  <div class="inline field"> 
      <div class="ui stackable two column grid">
          <div class="column"> <label>name</label></div>
    <div class="column"><input type="text" name="name" value="{{ Auth::user()->name }}" required></div>
  </div>
      </div>
  @if ($errors->has('name'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('name') }}</p>
  </div>
    @endif      
    <!--firstName-->
      <div class="inline field">
          <div class="ui stackable two column grid">
              <div class="column"> <label>Prenom</label></div>
   <div class="column"> <input type="text" name="firstName" value="{{ Auth::user()->firstName }}"required></div>
  </div>
      </div>
  @if ($errors->has('firstName'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('firstName') }}</p>
  </div>
    @endif  
  
             <!--Genre-->
      <div class="inline field">
     <div class="ui stackable two column grid">
         <div class="column"><label>Genre</label></div>
         <div class="column">
<select class="ui dropdown item" name="genre">
	  <option value="1">Homme</option>
	  <option value="0">Femme</option>
             </select>  </div></div></div>
  @if ($errors->has('genre'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('genre') }}</p>
  </div>
  </div>
    @endif 
                     <!--adresse-->
      <div class="inline field">
    <div class="ui stackable two column grid">
        <div class="column"> <label>Adresse</label></div>
       <div class="column"> <input type="text" name="adress" value="{{ Auth::user()->adress }}" required>  
        </div></div></div>
  @if ($errors->has('adress'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('adress') }}</p>
  </div>
    @endif 
                     <!--zip-->
      <div class="inline field">
     <div class="ui stackable two column grid">
         <div class="column"><label>Code postal</label></div>
        <div class="column"><input type="text" name="zip" value="{{ Auth::user()->zip }}" required>  
         </div></div></div>
  @if ($errors->has('zip'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('zip') }}</p>
  </div>
    @endif 
     <!--province-->
      <div class="inline field">
     <div class="ui stackable two column grid">
         <div class="column"><label>Province</label></div>
      <div class="column">  <select class="ui dropdown item" name="province">
	  <option value="1">Homme</option>
	  <option value="0">Femme</option>
	</select>  
    </div>
  @if ($errors->has('province'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('province') }}</p>
  </div>
    @endif 
          
          

          </div>

           </div>
 <div class="ui card" id="user">
  <div class="content">
    <div class="header">Optionnel</div>
  </div>
  <div class="content">
                 <!--phone-->
      <div class="inline field">
     <div class="ui stackable two column grid">
         <div class="column"><label>Numero de telephone</label></div>
        <div class="column"><input type="text" name="phone" value="{{ Auth::user()->phone }}">  
         </div></div></div>
  @if ($errors->has('phone'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('phone') }}</p>
  </div>
    @endif 
                    <!--Description-->
      <div class="inline field">
    <label>Description</label>
          <textarea name="description"  value="{{ Auth::user()->description }}"></textarea>
       
    </div>
  @if ($errors->has('description'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('description') }}</p>
  </div>
    @endif 
  </div>
  <div class="extra content">
    <input type="submit" class="ui button" value="valider">
  </div>
</div>
</form>
</div>
 </div> </div>
                <!--/profil -->
                  </div>
                  </div>
              <div class="ui vertical attached tab segment" data-tab="profil/b">1B</div>
              </div>
            </div>
            </div> 
               
    </div>
</div>
</div>
@endsection
