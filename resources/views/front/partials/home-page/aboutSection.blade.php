        <!-- About Start -->
        <section class="about-area pt-95 pb-100">
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-sm-12 col-xs-12">
                       <div class="about-content">
                            <h2>{{$titreAbout->titre}}</h2>
                            <p class="m-0">{{$about->p1}}</p>
                            <p>{{$about->p2}} </p>
                            <a class="banner-btn" href="{{route('about')}}" data-text="read more"><span>{{$about->btn}}</span></a>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-12 col-xs-12">
                       <div class="about-video active">
                            <div class="game">
                                <a href="#"><img src="{{asset('img/about/'.$about->image)}}" alt="about"></a>
                            </div> 
                            <div class="video-icon video-hover">
                                <a class="video-popup" href="{{$about->video}}">
                                    <i class="zmdi zmdi-play"></i>
                                </a>
                            </div>
                       </div>
                   </div>
               </div>
           </div>
        </section>
        <!-- Welcome End -->
    
  
