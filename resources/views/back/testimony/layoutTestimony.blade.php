@extends('back.template.mainCustomizelink')







@section('backContent2')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="min-height:100vh; background-color:white;">

    <div class="container p-4" style="position: relative !important;">
        <!-- Client Area Strat -->
        <section class="client-area pt-95 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 w-100">
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
                        </div>   
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Area End -->
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('testimonies.index')}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
    </div>

</div>
@endsection