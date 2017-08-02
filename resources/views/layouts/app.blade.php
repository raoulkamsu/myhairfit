<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles 
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">-->
    	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    	<link rel="stylesheet" type="text/css" href="{{ asset('css/fit.css') }}" />
		
     <link href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.css" rel="stylesheet" type="text/css">
		<script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.10/semantic.min.js"></script>
    
    <link href="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.css" rel="stylesheet" type="text/css" />
<script src="https://cdn.rawgit.com/mdehoog/Semantic-UI/6e6d051d47b598ebab05857545f242caf2b4b48c/dist/semantic.min.js"></script>
    <script src="{{ asset('js/fit.js') }}"></script>
</head>
<body style="padding-bottom: 100px;">

   

       
        @yield('content')
    
<flash message="{{ session('flash') }}"></flash>
    s
    <!-- Scripts 
    <script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/angular.min.js') }}"></script>
		<script src="{{ asset('js/modernizr.custom.js') }}"></script>
		<script src="{{ asset('js/classie.js') }}"></script>
		<script src="{{ asset('js/cbpSplitLayout.js') }}"></script>
		<script src="{{ asset('js/jquery.countdown.js') }}"></script>
		<script src="{{ asset('js/typed.js') }}"></script>
		<script src="{{ asset('js/app.js') }}"></script>
		<script src="{{ asset('js/controllers.js') }}"></script>
		<script src="{{ asset('js/owl.carousel.js') }}"></script>
		<script src="{{ asset('js/input-text.js') }}"></script>-->
		<!--<script src="js/notifyMe.js"></script>-->
		<!--<script src="{{ asset('js/jquery.placeholder.js') }}"></script>
		<script src="{{ asset('js/init.js') }}"></script>-->
		
</body>
</html>
