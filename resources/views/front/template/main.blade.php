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

        {{-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> --}}
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
        @include('front.partials.home-page.header')
        @if(!Route::is('classes.showClasse') && !Route::is('home'))
           @include('front.partials.bannerModel')
        @endif
        



        @yield('content')
        @include('front.partials.map')
        @include('front.partials.newsletter-area')
        @include('front.partials.footer')
       
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
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
