    <!-- Classes Start -->
        <section class="class-area fix bg-gray pb-100 pt-95">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>{{$titreClass->titre}}</h2>
                            <p>{{$titreSchedule->desciption}}</p>
                        </div>  
                    </div>
                </div>
                <div class="row"> 
                    @foreach ($classes as $classe)
                        
                    <div class="col-md-4 col-sm-6 col-xs-12">     
                        <div class="single-class">
                            <div class="single-img">
                                <a href="{{asset('class')}}"><img src="{{asset('img/class/'.$classe->image)}}" alt="class"></a>
                                <div class="gallery-icon">
                                    <a class="image-popup" href="{{asset('img/class/'.$classe->image)}}">
                                        <i class="zmdi zmdi-zoom-in"></i>
                                    </a>   
                                </div>
                            </div>
                            <div class="single-content">
                                <h3><a href="{{route('class')}}">{{$classe->nom}}</a></h3>
                                <ul>
                                    <li><i class="zmdi zmdi-face"></i>{{$classe->coach->user->name}}</li>
                                    <li><i class="zmdi zmdi-alarm"></i>{{$classe->horaire}}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-4 col-sm-6 col-xs-12">     
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
                                <a href="{{route('class')}}"><img src="{{asset('img/class/3.jpg')}}" alt="class"></a>
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
                    </div>  --}}
                </div>

            </div>
        </section>
        <!-- Class Area End -->



 