        <!-- Pricing Area Start -->
        <div class="pricing-area pt-95 pb-120 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2><span class="span">{{explode(" ",$titrePricing->titre)[0]}}</span> {{explode(" ",$titrePricing->titre)[1]}}</h2>
                            <p>{{$titrePricing->description}}</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    @foreach ($packages as $package )
                        
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-table text-center">
                            <div class="table-head">
                                <h2>{{$package->titre}}</h2>
                                <h1>{{$package->prix}}<span>/{{$package->frequence}}</span></h1>
                            </div>
                            <div class="table-body">
                                <ul>
                                    <li>{{$package->li1}}</li>
                                    <li>{{$package->li2}}</li>
                                    <li>{{$package->li3}}</li>
                                    <li>{{$package->li4}}</li>

                                </ul>
                                <a href="{{Auth::check()?route('paiement'):route('login')}}">{{$package->btn}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-table text-center">
                            <div class="table-head">
                                <h2>gold package</h2>
                                <h1>$50<span>/month</span></h1>
                            </div>
                            <div class="table-body">
                                <ul>
                                    <li>Free T-Shirt & swags</li>
                                    <li>Free of all message treatments</li>
                                    <li>Access Clup Facilites</li>
                                    <li>Out Door activites</li>
                                </ul>
                                <a href="#">get started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 hidden-sm col-xs-12">
                        <div class="single-table text-center">
                            <div class="table-head">
                                <h2>platinum package</h2>
                                <h1>$70<span>/month</span></h1>
                            </div>
                            <div class="table-body">
                                <ul>
                                    <li>Free T-Shirt & swags</li>
                                    <li>Free of all message treatments</li>
                                    <li>Access Clup Facilites</li>
                                    <li>Out Door activites</li>
                                </ul>
                                <a href="#">get started</a>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>