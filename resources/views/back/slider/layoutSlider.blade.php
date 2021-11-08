@extends('back.template.mainCustomizelink')







@section('backContent2')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="height:75vh; background-color:white;">

    <div class="container p-4">
<!-- Background Area Start -->
		<div class="slider-area">	
		    <div class="slider-wrapper">
                @foreach ($sliders as $slider )
                    
		        <div class="single-slide" style="background-image: url('img/slider/{{$slider->image}}');">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content text-left">
                                            <h5>{{$slider->titre}}</h5>
                                            <h1>{{explode(" ",$slider->soustitre)[0]}} <span>{{$slider->span}}</span> {{explode(" ",$slider->soustitre)[1]}} {{explode(" ",$slider->soustitre)[2]}}</h1>
                                            <p>{{$slider->texte}} </p>
                                            <a class="banner-btn" href="{{route('gallery')}}" data-text="read more"><span>{{$slider->btn}}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		        </div>
                @endforeach
                {{-- commentaire --}}
		        {{-- <div class="single-slide" style="background-image: url('img/slider/slider2.jpg');">
                    <div class="slider-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                    <div class="text-content-wrapper">
                                        <div class="text-content text-left">
                                            <h5>Welcome Our Handstand</h5>
                                            <h1>Keep <span>Refresh & Strong</span> Your Body</h1>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer auctor pharetra iss neque. Nullam cursus elit sit amet justo interdum facilisis id at tortor. </p>
                                            <a class="banner-btn" href="gallery.html" data-text="read more"><span>read more</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
		        </div> --}}
                {{-- commentaire --}}
		    </div>
		</div>
		<!-- Background Area End -->
    </div>
    <div class="d-flex justify-content-center">
        <a href="{{route('sliders.index')}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
    </div>

</div>
@endsection