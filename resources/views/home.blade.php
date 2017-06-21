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
              <div class="ui vertical attached active tab segment" data-tab="annonce/a"><h1>Vous n'avez pas d'annonces!</h1>
                  <p>Gagnez de l'argent en offrant vos services de beauté sur Myhairfit.</p>
                  <button class="ui secondary button">
                  Ajouter une annonce
                </button></div>
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
                           <div class=" seven wide column"> 
      <div class="ui special cards">
              <div class="card">
                <div class="blurring dimmable image">
                  <div class="ui dimmer">
                    <div class="content">
                      <div class="center">
                        <div class="ui inverted button">Modifier</div>
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
    <div class="header">Obligatoire</div>
  </div>
  <div class="content">
      <form class="ui form">
  <!-- Name-->        
  <div class="inline field">
    <label>name</label>
    <input type="text" name="name" value="{{ Auth::user()->name }}">
  </div>
  @if ($errors->has('name'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('name') }}</p>
  </div>
    @endif      
    <!--firstName-->
      <div class="inline field">
    <label>Prenom</label>
    <input type="text" name="name" value="{{ Auth::user()->firstName }}">
  </div>
  @if ($errors->has('firstName'))
         <div class="ui error message">
    <div class="header">Erreur</div>
    <p>{{ $errors->first('firstName') }}</p>
  </div>
    @endif  
</form>
    
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
                <!--/profil -->
                  
                  </div>
              <div class="ui vertical attached tab segment" data-tab="profil/b">1B</div>
              </div>
            </div>
            </div> 
               
    </div>
</div>
</div>
@endsection
