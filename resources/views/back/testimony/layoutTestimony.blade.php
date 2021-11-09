<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home Page || Handstand</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- All css here -->
     <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/shortcode/shortcodes.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        {{-- @include('front.partials.home-page.header')
        @if(!Route::is('home') )
           @include('front.partials.bannerModel')
        @endif --}}
        

     <div class="container-fluid">

        <div class="container w-75  ">
        <x-app-layout >
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>
            @include('back.partials.flash-message')

         <!-- Client Area Strat -->
        <section class="client-area pt-95 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>{{$titreClient->titre}} <span class="span">client</span> say</h2>
                            <p>{{$titreClient->description}} </p>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="testimonial-owl">

                                @foreach ($testimonies as $testimony)
                                    
                                <div class="col-xs-12">
                                    <div class="single-testimonial">
                                        <i class="zmdi zmdi-quote"></i>
                                        <p>{{$testimony->texte}}</p>
                                        <img src="{{asset('img/icon/'.$testimony->signature)}}" alt="signature">
                                        <h6>{{$testimony->nom}}</h6>
                                    </div>    
                                </div> 
                                @endforeach
                               
                            </div> 
                            <div class="d-flex justify-content-center">
                                <a href="{{route('testimonies.index')}}" class="btn btn-info"><i class="fas fa-eye fs-1 text-light"></i></a>
                            </div>
                        </div>   
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Area End -->
        {{-- @include('front.partials.map') --}}
        {{-- @include('front.partials.newsletter-area')
        @include('front.partials.footer') --}}
        </x-app-layout>
        @include("back.partials.navBar")
        </div>
    </div>
		<!-- All js here -->
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        {{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('js/ajax-mail.js')}}"></script>
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>   		
        <script src="{{asset('js/slick.min.js')}}"></script>    
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>  
        <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>  
        <script src="{{asset('js/plugins.js')}}"></script>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script>  --}}
        <script>

            function changeColorTitel(){
                var $titels = Array.from(document.getElementsByTagName('h2'));
                // $titels.forEach(element => console.log(element.innerText.split("(").join(",").split(")").join(",").split(",")));
                // $titels.forEach(element => console.log(element.innerText));
                // $titels.forEach(element => element.innerHtml.split(" ").find(element=>element.contains('(')));
                $titels.forEach(element =>{
                    element.innerHtml ="<span style='color:red;'>"+element.innerText.split(" ").find(element=>element.includes('('))+"<\span>"
                } )

            }
            changeColorTitel();

			// function initialize() {
			//   var mapOptions = {
			// 	zoom: 15,
			// 	scrollwheel: false,
			// 	center: new google.maps.LatLng(50.85147476196289, 4.311696529388428)
			//   };

			//   var map = new google.maps.Map(document.getElementById('googleMap'),
			// 	  mapOptions);


			//   var marker = new google.maps.Marker({
			// 	position: map.getCenter(),
			// 	animation:google.maps.Animation.BOUNCE,
			// 	icon: 'img/map-marker.png',
			// 	map: map
			//   });
                
			// }
                
			// google.maps.event.addDomListener(window, 'load', initialize);
		</script>
        <script src="{{asset('js/tailwind.js')}}"></script>

        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
