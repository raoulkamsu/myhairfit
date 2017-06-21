@extends('layouts.app')

@section('content')

@extends('layouts.search-bar')

@extends('layouts.nav')

<div class="container align-center detail-info">
    
    @if(count($errors)>0)
    
        <div class"alert alert-info">{{session('message')}}</div>
    @endif
    <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-3">
				<h1>Inscription</h1>
		</div>	
        <div class="col-lg-9 col-md-8 col-sm-8 col-xs-9">
            <div class="notify-wrap">
                <div class="panel-body">
                    <form class="contact-form" id="notifyMe" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} input--hoshi">
                            <label for="type" class="col-md-4 control-label">Vous etes?</label>
                            <div class="col-md-6">
												<select id="type" name="type">
                                                    <option>Professionnel</option>  
                                                    <option>Client</option>
                                                    </select>
						</div>	
                        </div>
                        
                        <div class="form-group input--hoshi">
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" value="{{ old('name') }}" id="name" name="name" placeholder="Nom" required autofocus>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('name'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>
                                       
                                <div class="form-group input--hoshi" >
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" value="{{ old('firstName') }}" id="name" name="firstName" placeholder="Prenom" required autofocus>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('firstName'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('firstName') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>
                      
                                 
                                <div class="form-group input--hoshi {{ $errors->has('email') ? ' has-error' : '' }}">
											<div class="input-wrap">
												<input data-ng-model="formData.inputName" type="text" class="form-control input__field input input__field--hoshi" id="email" name="email" placeholder="Courriel" value="{{ old('email') }}" required>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>
                            
                                <div class="form-group input--hoshi {{ $errors->has('password') ? ' has-error' : '' }}">
											<div class="input-wrap">
												<input  type="password" class="form-control input__field input input__field--hoshi" id="password" name="password" placeholder="Mot de passe" value="{{ old('password') }}" required>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>

                                 <div class="form-group input--hoshi {{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
											<div class="input-wrap">
												<input  type="password" class="form-control input__field input input__field--hoshi" id="password-confirmation" name="password_confirmation" placeholder="Confirmer Mot de passe" required>
												<label class="input__label input__label input__label--hoshi input__label--hoshi-color-1 input__label--hoshi input__label--hoshi-color-1" ></label>
                                                @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                                        </span>
                                    @endif  
                                            
                                            </div>	
										</div>

                        
                         <div class="form-group input--hoshi">
                            <p><input  type="checkbox" name="infolettre" checked="checked">J'aimerais recevoir des infolettres de Myhairfit.</p>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <span><span class="arrow-wrap"><span class="arrow"></span></span></span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
    </div>

</div>
@endsection
