@extends('layouts.app')

@section('content')


		<!--Container-->
		<div class="pad-zero">
			
			<!--Splitlayout -->
			<div id="splitlayout" class="splitlayout reset-layout">
				
				<!--Intro-->
				<div class="intro">
					
					<!--Left Content Intro-->
					<div class="side side-left">
						
						<!--About Nav-->
						<div class="call-to-action about">
                             @extends('layouts.nav')
						</div>
						<!--/About Nav-->
						
						<div class="col-lg-7 col-md-9 col-sm-9 col-xs-0 align-center content-wrap">
						
						<!--Logo-->
						<div class="logo align-center text-left"><img src="img/logo-dark.png" alt="logo">
						</div>
						<!--/Logo-->
						
						<!--main content-->
						<div class="main">
							
							<!--Content with Typing Intro-->
							<section id="home" class="section active">
								<div class="align-center text-left">
									<span class="small-hr animated fadeInLeft"  data-animation="fadeInLeft" data-out-animation="fadeOutLeft" data-out-animation-delay="200"></span>
									<p class="animated fadeInLeft"  data-animation="fadeInLeft" data-out-animation="fadeOutLeft" data-out-animation-delay="300">Vous aimez coiffer?<br/> Vous aimeriez vous faire coiffer dans le lieu de votre choix? <br/>Nous sommes occupés à travailler sur quelque chose d'extraordinaire.</p>
									<div class="type-wrap text-left">
										<h1  class="animated fadeInLeft"  data-animation="fadeInLeft" data-out-animation="fadeOutLeft" data-out-animation-delay="900"><span id="typed" ></span></h1>
									</div>
									
									
										<a href="{{ route('register') }}">S'inscrire</a>
									
								</div>		
							</section>
							<!--/Content with Typing Intro-->
												
								
								
						</div>
                           
						<!--/main content-->
						
						</div>
					</div>
					<!--/Left Content Intro-->
					
					<!--Right Content Intro-->
					<div class="side side-right">
						
						<!--slider image-->
						<ul class="cb-slideshow">
							<li><span>Image 01</span></li>
							<li><span>Image 02</span></li>
							<li><span>Image 03</span></li>
							<li><span>Image 04</span></li>
							<li><span>Image 05</span></li>
							<li><span>Image 06</span></li>
						</ul>
						<!--/slider image-->
						
						<!--Contect Nav-->
						<div class="call-to-action contact">
								<i class="fa fa-envelope fa-2x"></i>
								<i class="fa fa-times fa-2x opacity-hide"></i>
								<span class="top"></span>
								<span class="right"></span>
								<span class="bottom"></span>
								<span class="left"></span>
						</div>
						<!--/Contect Nav-->
						
						<div class="counter-content">
							<div class="col-lg-8 col-md-9 col-sm-9 col-xs-9 align-center text-left">
								<p class="tagline">Inscrivez vous et offrez vos services de pro</p>
								
								<!--Counter-->
								<div id="countdown">
								  <span class="days">00</span>
								</div>
								<span class="small-hr"></span>
								<span class="remain-days">jours</span>
								<!--/Counter-->
								
							</div>	
						</div>
					<div class="trans-overlay-dark"></div>	
					</div>
					<!--/Right Content Intro-->
				</div>
				<!--/Intro-->


@endsection