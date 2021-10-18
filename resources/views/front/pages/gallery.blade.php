@extends('front.template.main')



@section('content')
		<!-- Banner Area Start -->
		<section class="banner-area text-left">	
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>gallery</h2>
                                <div class="banner-breadcrumb">
                                    <ul>
                                        <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>gallery</li>
                                    </ul>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
		</section>
		<!-- Banner Area End -->
        <!-- Gallery Area Start -->
        <section class="gallery-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="test-content">
                            <div class="section-title text-center">
                                <h2>our gallery</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="grid" style="position: relative; height: 390px;">
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat3" style="position: absolute; left: 0%; top: 0px;">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/gal.jpg')}}" alt="project">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/gal.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat2 cat4" style="position: absolute; left: 25%; top: 0px;">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/gal2.jpg')}}" alt="project">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/gal2.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat4" style="position: absolute; left: 50%; top: 0px;">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/gal3.jpg')}}" alt="project">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/gal3.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat2" style="position: absolute; left: 75%; top: 0px;">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/gal4.jpg')}}" alt="project">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/gal4.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat2 cat3" style="position: absolute; left: 25%; top: 210px;">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/gal5.jpg')}}" alt="project">
                               <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/gal5.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat3" style="position: absolute; left: 50%; top: 210px;">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/gal6.jpg')}}" alt="project">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/gal6.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat3" style="position: absolute; left: 50%; top: 210px;">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/gal7.jpg')}}" alt="project">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/gal7.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat3" style="position: absolute; left: 50%; top: 210px;">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/gal8.jpg')}}" alt="project">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/gal8.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item cat1 cat3" style="position: absolute; left: 50%; top: 210px;">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/gal9.jpg')}}" alt="project">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/gal9.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>    
        <!-- Gallery Area End -->
        <!-- Client Area Strat -->
        <section class="client-area pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>gift our client say</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                        </div>
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="testimonial-owl">
                                <div class="col-xs-12">
                                    <div class="single-testimonial">
                                        <i class="zmdi zmdi-quote"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                        <img src="{{asset('img/icon/signature.png')}}" alt="signature">
                                        <h6>Co-Founder Of Company</h6>
                                    </div>    
                                </div> 
                                <div class="col-xs-12">
                                    <div class="single-testimonial">
                                        <i class="zmdi zmdi-quote"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                        <img src="{{asset('img/icon/signature.png')}}" alt="signature">
                                        <h6>Co-Founder Of Company</h6>
                                    </div>    
                                </div> 
                                <div class="col-xs-12">
                                    <div class="single-testimonial">
                                        <i class="zmdi zmdi-quote"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                        <img src="{{asset('img/icon/signature.png')}}" alt="signature">
                                        <h6>Co-Founder Of Company</h6>
                                    </div>    
                                </div> 
                                <div class="col-xs-12">
                                    <div class="single-testimonial">
                                        <i class="zmdi zmdi-quote"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                        <img src="{{asset('img/icon/signature.png')}}" alt="signature">
                                        <h6>Co-Founder Of Company</h6>
                                    </div>    
                                </div> 
                                <div class="col-xs-12">
                                    <div class="single-testimonial">
                                        <i class="zmdi zmdi-quote"></i>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non mi just. Aliquam vitae purus vel odio suscipit lobortis. Donec interdum finibus egestas. In eleifend ipsum eu lacinia congue. Vestibulum sodales, sapien aliquam </p>
                                        <img src="{{asset('img/icon/signature.png')}}" alt="signature">
                                        <h6>Co-Founder Of Company</h6>
                                    </div>    
                                </div>  
                            </div> 
                        </div>   
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Area End -->
 
@endsection