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
        



        @yield('content')
        @include('front.partials.map')
        <!-- Newsletter Area Start -->
        <section class="newsletter-area bg-gray">
            <div class="container">
                <div class="row">
                    <div class="newsletter-wrapper fix">
                        <div class="col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                            <div class="newsletter-content section-title text-center">
                                <h2>subscribe now for latest update!</h2> 
                                <div class="newsletter-form">
                                    {{-- <form action="{{route('newsletteradresses.store')}}" method="post" id="mc-form" class="mc-form fix" enctype="multipart/form-data">
                                        @csrf
                                        <input id="mc-email" type="email" name="email" placeholder="Enter Your E-mail ID">
                                        <button id="mc-submit" type="submit" class="default-btn" data-text="submit" ><span >submit</span></button> 
                                    </form> --}}
                                    <form action="{{route('newsletteradresses.store')}}" method="POST">
                                        @csrf
                                    <input type="text" name="email">
                                    <button type="submit" class="btn btn-secondary">submit</button>
                                    @include('back.partials.flash-message')
                                    </form>
                                    <!-- mailchimp-alerts Start -->
                                    <div class="mailchimp-alerts">
                                        <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                        <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                        <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                    </div>
                                    <!-- mailchimp-alerts end -->
                                </div>
                            </div>
                        </div>
                    </div>    
                </div>
            </div>
        </section>
        <!-- Newsletter Area End -->

       <!-- Footer Area Start -->
        <footer class="footer-area bg-gray">
            <div class="footer-widget-area bg-3 pt-98 pb-90 fix">
                <div class="container">
                    <div class="row">  
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-footer-widget">
                                <a href="{{route('home')}}"><img src="{{asset('img/logo/logo.png')}}" alt="handstand"></a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a convallis nulla. Ut </p>
                                <ul>
                                    <li><i class="zmdi zmdi-email"></i> username@gmail.com</li>
                                    <li><i class="zmdi zmdi-phone"></i> (+660 256 24857)</li>
                                    <li><i class="zmdi zmdi-home"></i> Your Address Here</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-footer-widget">
                                <h3>Recent Tweets</h3>
                                <div class="single-twitt mb-10">
                                    <div class="twitt-icon">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </div>
                                    <div class="twitt-content">
                                        <p>@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!</p>
                                   <a href="https://twitter.com/login/">https://twitter.com/login</a>
                                    </div>
                                </div>
                                <div class="single-twitt">
                                    <div class="twitt-icon">
                                        <i class="zmdi zmdi-twitter"></i>
                                    </div>
                                    <div class="twitt-content">
                                        <p>@envato good News for today!! We got  2 psd templete weekly top selling quality template in technology category !!!</p>
                                   <a href="https://twitter.com/login/">https://twitter.com/login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm col-xs-12">
                            <div class="single-footer-widget">
                                <h3>get in touch</h3>
                                {{-- <form id="subscribe-form" action="{{route('storeContact')}}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Name" name="name">
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Email" name="email">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="7" name="subject" placeholder="subject"></textarea>
                                            <button type="submit">submit</button>
                                            <p class="subscribe-message"></p>
                                        </div>
                                    </div>
                                </form> --}}
                                <form action="{{route('storeContact')}}" method="POST">
                                @csrf
                                <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Name" name="name">
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Email" name="email">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="7" name="subject" placeholder="subject"></textarea>
                                            <button type="submit">submit</button>
                                            {{-- <p class="subscribe-message"></p> --}}
                                        </div>
                                </div>

                                </form>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-text-area fix bg-coffee ptb-18">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-text text-center">
                                <span>Copyright &copy; <a href="#">Hastech</a> 2017. All Rights Reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->
       
		<!-- All js here -->
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('js/ajax-mail.js')}}"></script>
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>   		
        <script src="{{asset('js/slick.min.js')}}"></script>    
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>  
        <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>  
        <script src="{{asset('js/plugins.js')}}"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script> 
        <script>
			function initialize() {
			  var mapOptions = {
				zoom: 15,
				scrollwheel: false,
				center: new google.maps.LatLng(50.85147476196289, 4.311696529388428)
			  };

			  var map = new google.maps.Map(document.getElementById('googleMap'),
				  mapOptions);


			  var marker = new google.maps.Marker({
				position: map.getCenter(),
				animation:google.maps.Animation.BOUNCE,
				icon: 'img/map-marker.png',
				map: map
			  });
                
			}
                
			google.maps.event.addDomListener(window, 'load', initialize);
		</script>
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>
