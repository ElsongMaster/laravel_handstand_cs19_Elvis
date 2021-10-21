        <!-- Trainer Area Start -->
        <div class="trainer-area pt-90 pb-100 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2>{{$titreTrainer->titre}}</h2>
                            <p>{{$titreTrainer->description}} </p>
                        </div>
                    </div>
                    @for ($i=0;$i<$coaches->count();$i++)
                        
                        @if ($i === 1)
                            
                        
                    
                        <div class="col-md-4 col-sm-6 col-xs-12">
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
                                    <h3>{{$coachesWithoutLead[$i===0?1:0]->user->name}}</h3>
                                    <ul class="liSocial">
                                         @foreach ($coachesWithoutLead[$i===0?1:0]->linksocials as $link )
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
        <!-- Trainer Area End -->