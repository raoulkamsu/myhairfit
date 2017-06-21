<!-- nav top-->
  <div class="computer tablet only row">
  <div class="ui secondary  menu">
      <div class="item"></div>
  <a class="active item">
    <img src ="{{ asset('img/ico.png') }}">
  </a>
  <div class="right menu">
   
        <a class="item">
			Acceuil
		  </a>
		  <a class="item">
			Devenir un professionel
		  </a>
		  <div class="item">
	  <div class="ui icon input">
        <input type="text" placeholder="Search...">
        <i class="search link icon"></i>
      </div>
	  </div>
	  <select class="ui dropdown item">
	  <option value="">Lang</option>
	  <option value="1">Fr</option>
	  <option value="0">En</option>
	</select>
	            @if (Auth::guest())
    <a href="{{ route('login') }}" class="ui item">
      Connexion
    </a>
	<a href="{{ route('register') }}" class="ui item">
      Inscription
    </a>
          @else
          <div class="item">
          <ul class="ui selection dropdown">
          <i class="dropdown icon"></i>
      <li class="default text">{{ Auth::user()->name }}</li>
      <div class="menu">
        <li class="item"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
          </li>
        </div>
              </ul>
          </div>
          @endif
  </div>
</div>

  </div><div class="ui grid">
  <div class="mobile only row">
      <div class="ui fixed navbar menu">
           <img src = "img/32.png">
          <div class="right menu open">
              <a href="" class="menu item">
                  <i class="content icon"></i>
              </a>
          </div>
      </div>
      <div class="ui vertical navbar menu">
         <div class="item">
        <a class="item">
			Acceuil
		  </a>
		  <a class="item">
			Devenir un professionel
		  </a>
	  <div class="ui icon input">
        <input type="text" placeholder="Search...">
        <i class="search link icon"></i>
      </div>
    </div>
            <select class="ui dropdown item">
	  <option value="">Lang</option>
	  <option value="1">Fr</option>
	  <option value="0">En</option>
	</select>
           @if (Auth::guest())
    <a href="{{ route('login') }}" class="ui item">
      Connexion
    </a>
	<a href="{{ route('register') }}" class="ui item">
      Inscription
    </a>
          @else
          <div class="item">
          <ul class="ui selection dropdown">
          <i class="dropdown icon"></i>
      <li class="default text">{{ Auth::user()->name }}</li>
      <div class="menu">
        <li class="item"><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
          </li>
        </div>
              </ul>
          </div>
          @endif
      </div>
  </div>
</div>
<!--/ nav top-->