@extends('back.template.mainCustomizelink')







@section('backContent2')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="height:fit-content;">

    <div class="container p-2">
    
	        <!-- About Start -->
        <section class="about-area pt-95 pb-100" >
           <div class="container">
               <div class="row">
                   <div class="col-md-6 col-sm-12 col-xs-12">
                       <div class="about-content">
                            <h2 style="font-size:2vw;">{{$titreAbout->titre}}</h2>
                            <p style="font-size:1vw;" class="m-0">{{$about->p1}}</p>
                            <p style="font-size:1vw;" >{{$about->p2}} </p>
                            <a class="banner-btn" href="{{route('about')}}" data-text="read more"><span>{{$about->btn}}</span></a>
                       </div>
                   </div>
                   <div class="col-md-6 col-sm-12 col-xs-12 mt-3">
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
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('abouts.show',$about->id)}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
    </div>

</div>


@endsection