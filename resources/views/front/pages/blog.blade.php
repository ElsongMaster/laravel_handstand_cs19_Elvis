@extends('front.template.main')



@section('content')
		<!-- Banner Area Start -->
		<section class="banner-area text-left">	
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>blog</h2>
                                <div class="banner-breadcrumb">
                                    <ul>
                                        <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>blog</li>
                                    </ul>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
		</section>
		<!-- Banner Area End -->
        <!-- Blog Area Start -->
        <section class="blog-area pt-95 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>our blog</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                        </div>
                    </div> 
                </div>       
                <div class="row">      
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-blog pb-30">
                            <div class="blog-pic single-img">
                                <img src="{{asset('img/blog/blog1.jpg')}}" alt="blog">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/blog/blog1.jpg')}}">
                                        <i class="zmdi zmdi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Curabitur ante justo,  vitae.</a></h3>
                                <h6>25 March 2017</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut nisl non justo aliquam euismod ut ac orci.</p>
                                <a href="#">read more</a>
                            </div> 
                        </div>
                    </div>      
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-blog pb-30">
                            <div class="blog-pic single-img">
                                <img src="{{asset('img/blog/blog2.jpg')}}" alt="blog">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/blog/blog2.jpg')}}">
                                        <i class="zmdi zmdi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Curabitur ante justo,  vitae.</a></h3>
                                <h6>25 March 2017</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut nisl non justo aliquam euismod ut ac orci.</p>
                                <a href="#">read more</a>
                            </div> 
                        </div>
                    </div>     
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-pic single-img">
                                <img src="{{asset('img/blog/blog3.jpg')}}" alt="blog">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/blog/blog3.jpg')}}">
                                        <i class="zmdi zmdi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Curabitur ante justo,  vitae.</a></h3>
                                <h6>25 March 2017</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut nisl non justo aliquam euismod ut ac orci.</p>
                                <a href="#">read more</a>
                            </div> 
                        </div>
                    </div>      
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-pic single-img">
                                <img src="{{asset('img/blog/blog1.jpg')}}" alt="blog">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/blog/blog1.jpg')}}">
                                        <i class="zmdi zmdi-link"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3><a href="#">Curabitur ante justo,  vitae.</a></h3>
                                <h6>25 March 2017</h6>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean ut nisl non justo aliquam euismod ut ac orci.</p>
                                <a href="#">read more</a>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Event Area End -->
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