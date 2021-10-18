@extends('front.template.main')



@section('content')
	<!-- Banner Area Start -->
		<section class="banner-area text-left">	
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-content-wrapper">
                            <div class="banner-content">
                                <h2>class</h2>
                                <div class="banner-breadcrumb">
                                    <ul>
                                        <li><a href="{{route('home')}}">home </a> <i class="zmdi zmdi-chevron-right"></i></li>
                                        <li>class</li>
                                    </ul>
                                </div>
                            </div>  
                        </div> 
                    </div>
                </div>
            </div>
		</section>
		<!-- Banner Area End -->
        <!-- Classes Start -->
        <section class="class-area fix bg-gray pb-100 pt-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>our classes</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                        </div>  
                    </div>
                </div>
                <div class="row"> 
                    <div class="col-md-4 col-sm-6 col-xs-12">     
                        <div class="single-class">
                            <div class="single-img">
                                <a href="class.html"><img src="{{asset('img/class/1.jpg')}}" alt="class"></a>
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/class/1.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>   
                                </div>
                            </div>
                            <div class="single-content">
                                <h3><a href="{{route('class')}}">yoga for climbers</a></h3>
                                <ul>
                                    <li><i class="zmdi zmdi-face"></i>Sathi Bhuiyan</li>
                                    <li><i class="zmdi zmdi-alarm"></i>10.00Am-05:00Pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">     
                        <div class="single-class">
                            <div class="single-img">
                                <a href="{{route('class')}}"><img src="{{asset('img/class/2.jpg')}}" alt="class"></a>
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/class/2.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>   
                                </div>
                            </div>
                            <div class="single-content">
                                <h3><a href="{{route('class')}}">yoga for climbers</a></h3>
                                <ul>
                                    <li><i class="zmdi zmdi-face"></i>Sathi Bhuiyan</li>
                                    <li><i class="zmdi zmdi-alarm"></i>10.00Am-05:00Pm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">     
                        <div class="single-class">
                            <div class="single-img">
                                <a href="class.html"><img src="{{asset('img/class/3.jpg')}}" alt="class"></a>
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/class/3.jpg')}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>   
                                </div>
                            </div>
                            <div class="single-content">
                                <h3><a href="{{route('class')}}">yoga for climbers</a></h3>
                                <ul>
                                    <li><i class="zmdi zmdi-face"></i>Sathi Bhuiyan</li>
                                    <li><i class="zmdi zmdi-alarm"></i>10.00Am-05:00Pm</li>
                                </ul>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <a class="banner-btn mt-55" href="#" data-text="view all classes"><span>view all classes</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Class Area End -->
        <!-- Schedule Area Strat -->
        <section class="schedule-area pt-85 pb-90 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title">
                            <h2>class schedule</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-xs-12">                             
                        <div class="scehedule-table table-responsive text-center">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>saturday</th>
                                        <th>sunday</th>
                                        <th>monday</th>
                                        <th>tuesday</th>
                                        <th>wednesday</th>
                                        <th>thursday</th>
                                        <th>friday</th>
                                    </tr>
                                </thead>
                                <tbody class="pt-30">
                                    <tr>
                                        <td class="time">
                                            <p>8:00 AM</p>
                                        </td>
                                        <td class="purple">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td class="purple">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                        <td class="purple">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="time">
                                            <p>12:00 AM</p>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td class="olive">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                        <td class="olive">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td class="time">
                                            <p>3:00 PM</p>
                                        </td>
                                        <td></td>
                                        <td class="blue">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td class="blue">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                        <td class="blue">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="time">
                                            <p>6:00 PM</p>
                                        </td>
                                        <td class="pink">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                        <td></td>
                                        <td class="pink">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                        <td class="pink">
                                            <h4>yoga for climbers</h4>
                                            <p>Sathi Bhuiyan</p>
                                            <p>8.00 Am-10.00Am</p>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Schedule Area End -->
        <!-- Pricing Area Start -->
        <div class="pricing-area pt-95 pb-120 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>pricing table</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-table text-center">
                            <div class="table-head">
                                <h2>silver package</h2>
                                <h1>$30<span>/month</span></h1>
                            </div>
                            <div class="table-body">
                                <ul>
                                    <li>Free T-Shirt & swags</li>
                                    <li>Free of all message treatments</li>
                                    <li>Access Clup Facilites</li>
                                    <li>Out Door activites</li>
                                </ul>
                                <a href="#">get started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-table text-center">
                            <div class="table-head">
                                <h2>gold package</h2>
                                <h1>$50<span>/month</span></h1>
                            </div>
                            <div class="table-body">
                                <ul>
                                    <li>Free T-Shirt & swags</li>
                                    <li>Free of all message treatments</li>
                                    <li>Access Clup Facilites</li>
                                    <li>Out Door activites</li>
                                </ul>
                                <a href="#">get started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-table text-center">
                            <div class="table-head">
                                <h2>platinum package</h2>
                                <h1>$70<span>/month</span></h1>
                            </div>
                            <div class="table-body">
                                <ul>
                                    <li>Free T-Shirt & swags</li>
                                    <li>Free of all message treatments</li>
                                    <li>Access Clup Facilites</li>
                                    <li>Out Door activites</li>
                                </ul>
                                <a href="#">get started</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pricing Area End -->
        <!-- Client Area Strat -->
        <section class="client-area pt-95 pb-50">
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
        <!-- Trainer Area Start -->
        <div class="trainer-area pt-90 pb-100 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>our trainer</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem </p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-trainer text-center">
                            <img src="{{asset('img/trainer/trainer1.jpg')}}" alt="trainer">
                            <div class="trainer-hover">
                                <h3>John laisa do</h3>
                                <ul>
                                    <li><a href=" https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>  
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-trainer text-center">
                            <img src="{{asset('img/trainer/trainer2.jpg')}}" alt="trainer">
                            <div class="trainer-hover">
                                <h3>John laisa do</h3>
                                <ul>
                                    <li><a href=" https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>  
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-trainer text-center">
                            <img src="{{asset('img/trainer/trainer3.jpg')}}" alt="trainer">
                            <div class="trainer-hover">
                                <h3>John laisa do</h3>
                                <ul>
                                    <li><a href=" https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>  
                                    <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                                    <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Trainer Area End -->

@endsection