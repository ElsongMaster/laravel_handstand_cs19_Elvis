@extends('back.template.mainCustomizelink')







@section('backContent2')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="min-height:100vh; background-color:white;">

    <div class="container p-4" style="position: relative !important;">
     <!-- Event Area Strat -->
        <section class="event-area pt-95 pb-100 bg-gray w-100 border">
            
            <div class="container w-100">
                <div class="row w-100">
                   
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 w-100">
                        <div class="section-title text-center w-100">
                            <h2>{{explode(" ",$titreEvent->titre)[0]}} <span class="span">{{explode(" ",$titreEvent->titre)[1]}}</span></h2>
                            <p>{{$titreEvent->description}}</p>
                        </div>
                         @foreach ($events as $event )
                        <div class="event-wrapper " style="width: 70vw;" >
                            <div class="event-content text-center">
                                <h3>{{$event->titre}}</h3>
                                <p>{{$event->description}}</p>
                                <h4>{{date("d F Y",strtotime($event->date))}}</h4>
                                <h5>{{$event->heure}}</h5>
                            </div> 
                        </div>
                        @endforeach
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Event Area End -->
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('events.index')}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
    </div>

</div>
@endsection