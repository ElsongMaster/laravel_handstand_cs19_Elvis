@extends('back.template.mainCustomizelink')







@section('backContent2')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="height:fit-content;">

    <div class="container p-2 my-0">
    
                
              <!-- Pricing Area Start -->
        <div class="pricing-area pt-95 pb-120 bg-gray">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12 w-100">
                        <div class="section-title text-center w-100">
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
                                <a href="{{Auth::check()?route('Validatepaiement',$package->id):route('login2',$package->id)}}">{{$package->btn}}</a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center my-0 py-0">
        <a href="{{route('packages.index')}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
    </div>

</div>


@endsection