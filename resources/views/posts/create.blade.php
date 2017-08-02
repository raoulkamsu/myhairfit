@extends('layouts.app')

@section('content')

@extends('layouts.search-bar')

@extends('layouts.nav')

<div class="container align-center detail-info">
    
    @if(count($errors)>0)
    
        <div class="alert alert-info">{{session('message')}}</div>
    @endif
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
				<h1>Creer une annonce</h1>
		</div>	
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-9">
            <div class="notify-wrap">
                <div class="panel-body">
                    <form class="contact-form" id="notifyMe" role="form" method="POST" action="{{ route('posts.create') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} input--hoshi">
                            <label for="type" class="col-md-4 control-label">Catégorie:</label>
                            <div class="col-md-6">
                            
												<select id="type" name="categorie">
                                                   @foreach($categories as $categorie)
                                                    <option class="item" value="{{$categorie->id}}" {{old('categorie') == $categorie->id ? 'selected': ''}}>{{$categorie->slug}}</option>  
                                                   @endforeach
                                                </select>
						</div>	
                        </div>
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} input--hoshi">
                            <label for="type" class="col-md-4 control-label">Type de cheveux:</label>
                            <div class="col-md-6">
												<select id="type" name="typeCheveux">
                                                    <option>cocasien</option>  
                                                    <option>Client</option>
                                                    </select>
						</div>	
                        </div>
                        
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} input--hoshi">
                            <label for="type" class="col-md-4 control-label">Pour:</label>
                            <div class="col-md-6">
												<select id="type" name="sexe">
                                                    <option>Homme</option>  
                                                    <option>Femme</option>
                                                    </select>
						</div>	
                        </div>
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} input--hoshi">
                            <label for="type" class="col-md-4 control-label">Distance max:</label>
                            <div class="col-md-6">
												<select id="type" name="distanceMax">
                                                    <option>10km</option>  
                                                    <option>20km</option>
                                                    <option>30km</option>
                                                    <option>40km</option>
                                                    <option>50km</option>
                                                    <option>60km</option>
                                                    </select>
						</div>	
                        </div>
                        <div class="form-group input--hoshi">
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" value="{{ old('title') }}" id="name" name="title" placeholder="Titre" required autofocus>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>
                                       
                                <div class="form-group input--hoshi" >
											<div class="input-wrap">
                                                <textarea data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" value="{{ old('firstName') }}" id="name" name="description" placeholder="Desription" required autofocus></textarea>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('description'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('description') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>
                        <div class="form-group input--hoshi {{ $errors->has('zip') ? ' has-error' : '' }}">
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" id="email" name="zip" placeholder="Code postal" value="{{ old('zip') }}" required>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('zip'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('zip') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
								</div>
                              <div class="form-group input--hoshi {{ $errors->has('adress') ? ' has-error' : '' }}">
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" id="adress" name="adress" placeholder="Adresse" value="{{ old('adress') }}" required>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('adress'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('adress') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
								</div>
                              <div class="form-group input--hoshi {{ $errors->has('prix') ? ' has-error' : '' }}">
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" id="city" name="city" placeholder="Ville" value="{{ old('city') }}" required>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('city'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('city') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
								</div>
                        
                                <div class="form-group input--hoshi {{ $errors->has('prix') ? ' has-error' : '' }}">
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" id="email" name="prix" placeholder="Prix" value="{{ old('prix') }}" required>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('prix'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('prix') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>
                            
                                    <div class="form-group input--hoshi {{ $errors->has('prixdomicile') ? ' has-error' : '' }}">
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" id="email" name="prixdomicile" placeholder="prix du service à domicile" value="{{ old('prixdomicile') }}" required>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('prixdomicile'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('prixdomicile') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>
                              <div class="form-group input--hoshi">
											<div class="input-wrap">
												<input  type="text"  class="form-control input__field input input__field--hoshi" value="{{ old('phone') }}" id="name" name="phone" placeholder="Telephone" autofocus>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('phone'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>
                              <div class="form-group input--hoshi">
											<div class="input-wrap">
                                                 @if(auth()->check())
												<input type="text" class="form-control input__field input input__field--hoshi" id="name" name="email" value ="{{ Auth::user()->email }}"  required autofocus>
                                                @else
                                                <input type="text" class="form-control input__field input input__field--hoshi"  id="name" name="email"  placeholder="Email" required autofocus>
                                                @endif
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>
                    
     
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
                    <div class="form-group input--hoshi {{ $errors->has('images') ? ' has-error' : '' }}">
                          
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
                         <div class="form-group input--hoshi">
                            <label><input  type="checkbox" name="infolettre" required>J'accepte les termes et condition.</label>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <span><span class="arrow-wrap"><span class="arrow"></span></span></span>
                                </button>
                            </div>
                        </div>
                    </form>
                        @if (count($errors) > 0)
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        </div>   
    </div>
</div>
@endsection
