@extends('back.template.mainCustomizelink')







@section('backContent2')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="height:fit-content;">

    <div class="container p-2 my-0">
    
                
        <!-- Gallery Area Start -->
        <section class="gallery-area pt-90 pb-100">
            <div class="container">
               <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 w-100">
                        <div class="test-content w-100">
                            <div class="section-title text-center w-100">
                                <h2>{{$titreGallery->titre}}</h2>
                                <p>{{$titreGallery->description}} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="grid" style=" display:flex; flex-wrap:wrap; position: relative; height: 390px;">
                        @foreach ($galleries as $item )
                            
                        <div class="col-md-4 col-sm-4 col-xs-12 grid-item {{$item->class}}" style="position: absolute;{{$item->position}}">
                            <div class="portfolio-img single-img">
                                <img src="{{asset('img/portfolio/'.$item->image)}}" alt="project">
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/portfolio/'.$item->image)}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>    
        <!-- Gallery Area End -->
   
    </div>
    <div class="d-flex justify-content-center my-0 py-0">
        <a href="{{route('galleries.index')}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
    </div>

</div>


@endsection