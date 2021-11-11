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
                                            <h1 class="titel errorStr">{{$slider->soustitre}}</h1>
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

		    </div>
		</div>
		<!-- Background Area End -->