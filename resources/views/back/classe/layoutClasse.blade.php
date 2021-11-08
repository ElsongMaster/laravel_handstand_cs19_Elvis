@extends('back.template.mainCustomizelink')







@section('backContent2')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="min-height:100vh; background-color:white;">

    <div class="container p-4" style="position: relative !important;">
    <!-- Classes Start -->
        <section class="class-area fix bg-gray pb-100 pt-95" style="transform:none; heigth:fit-content;">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12  w-100">
                        <div class="section-title text-center  w-100">
                            <h2>{{$titreClass->titre}}</h2>
                            <p>{{$titreClass->desciption}}</p>
                        </div>  
                    </div>
                </div>
                <div class="row"> 
                    @foreach ($classes as $classe)
                        
                    <div class="col-md-4 col-sm-6 col-xs-12 mt-3 ">
                       @if (\Carbon\Carbon::now()->toDateString()>$classe->date)
                            <div class=" {{$classe->color ==="green"?'green':''}} {{$classe->color ==="orange"?'orange':''}}  {{$classe->color ==="red"?'red':''}}single-class"  hidden>
                                
                        @else
                            <div class=" {{$classe->color ==="green"?'green':''}} {{$classe->color ==="orange"?'orange':''}}  {{$classe->color ==="red"?'red':''}}single-class"  >
                           
                       @endif
                            <div class="single-img">
                                <a href="{{asset('class')}}"><img src="{{asset('img/class/'.$classe->image)}}" alt="class"></a>
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/class/'.$classe->image)}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>   
                                </div>
                            </div>
                            <div class=" {{$classe->color ==="green"?'green':''}} {{$classe->color ==="orange"?'orange':''}}  {{$classe->color ==="red"?'red':''}} single-content  " >
                                <h3><a href="{{route('class')}}">{{$classe->nom}}</a></h3>
                                <ul>
                                    <li><i class="zmdi zmdi-face"></i>{{$classe->coach->user->name}}</li>
                                    <li><i class="zmdi zmdi-alarm"></i>{{$classe->horaire}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>

            </div>
        </section>
        <!-- Class Area End -->
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('classes.index')}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
    </div>

</div>
@endsection