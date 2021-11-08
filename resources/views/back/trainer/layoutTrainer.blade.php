@extends('back.template.mainCustomizelink')







@section('backContent2')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="height:fit-content;">

    <div class="container p-2 my-0">
    
 <!-- Trainer Area Start -->
        <div class="trainer-area pt-90 pb-100 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12  w-100">
                        <div class="section-title text-center  w-100">
                            <h2>{{$titreTrainer->titre}}</h2>
                            <p>{{$titreTrainer->description}} </p>
                        </div>
                    </div>
                    <div class="row">

                        @for ($i=0;$i<$coaches->count();$i++)
                            
                            @if ($coachLead !==null && $coaches->count()>=2 && $i === 1)
                                
                            
                        
                            <div class="col-md-4 col-sm-6 col-xs-12 mx-auto">
                                <div class="single-trainer text-center">
                                    <img src="{{asset('img/trainer/'.$coachLead->image)}}" alt="trainer">
                                    <div class="trainer-hover">
                                        <h3>{{$coachLead->user->name}}</h3>
                                        <ul>
                                            @foreach ($coachLead->linksocials as $link )
                                                <li><a href="{{$link->lien}}"><i class="{{$link->icon->nomClass}}"></i></a></li>
                                            @endforeach  
                                            {{-- <li><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                                            <li><a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                            </div> 
    
                            @else
                            
                        
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                <div class="single-trainer text-center">
                                    <img src="{{asset('img/trainer/'.$coachesWithoutLead[$i>0?$i-1:$i]->image)}}" alt="trainer">
                                    <div class="trainer-hover">
                                        <h3>{{$coachesWithoutLead[$i>0?$i-1:$i]->user->name}}</h3>
                                        <ul class="liSocial">
                                             @foreach ($coachesWithoutLead[$i>0?$i-1:$i]->linksocials as $link )
                                            <li class="list-unstyled" ><a href="{{$link->lien}}"><i class="{{$link->icon->nomClass}}"></i></a></li>
                                            @endforeach  
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                            @endif  
                        @endfor
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Trainer Area End -->
    </div>
    <div class="d-flex justify-content-center my-0 py-0">
        <a href="{{route('coaches.index')}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
    </div>

</div>


@endsection