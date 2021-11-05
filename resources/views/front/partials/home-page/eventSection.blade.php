     <!-- Event Area Strat -->
        <section class="event-area pt-95 pb-100 bg-gray">
            
            <div class="container">
                <div class="row">
                   
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
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