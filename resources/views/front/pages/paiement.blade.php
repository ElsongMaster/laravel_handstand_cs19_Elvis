<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- style template --}}
    <link rel="stylesheet" href="{{asset('css/shortcode/shortcodes.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

    <link rel="stylesheet" href="{{asset('css/paiement.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">

    <title>Document</title>
</head>
<body class="d-flex">

<div class="container d-lg-flex" style="min-height:180vh;">
    <div class="box-1 bg-light user">
        {{-- <div class="d-flex align-items-center mb-3"> <img src="https://images.pexels.com/photos/4925916/pexels-photo-4925916.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="pic rounded-circle" alt="">
            <p class="ps-2 name">Oliur</p>
        </div> --}}
        {{-- <div class="box-inner-1 pb-3 mb-3 ">
            <div class="d-flex justify-content-between mb-3 userdetails">
                <p class="fw-bold">Lightroom Presets</p>
                <p class="fw-lighter"><span class="fas fa-dollar-sign"></span>33.00+</p>
            </div>
            <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel" data-bs-interval="2000">
                <div class="carousel-indicators"> <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button> <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button> <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button> </div>
                <div class="carousel-inner">
                    <div class="carousel-item active"> <img src="https://images.pexels.com/photos/100582/pexels-photo-100582.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="d-block w-100"> </div>
                    <div class="carousel-item"> <img src="https://images.pexels.com/photos/258092/pexels-photo-258092.jpeg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="d-block w-100 h-100"> </div>
                    <div class="carousel-item"> <img src="https://images.pexels.com/photos/7974/pexels-photo.jpg?auto=compress&cs=tinysrgb&dpr=2&w=500" class="d-block w-100"> </div>
                </div> <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                    <div class="icon"> <span class="fas fa-arrow-left"></span> </div> <span class="visually-hidden">Previous</span>
                </button> <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                    <div class="icon"> <span class="fas fa-arrow-right"></span> </div> <span class="visually-hidden">Next</span>
                </button>
            </div>
            <p class="dis info my-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quos ipsa sed officiis odio </p>
            <div class="radiobtn"> <input type="radio" name="box" id="one"> <input type="radio" name="box" id="two"> <input type="radio" name="box" id="three"> <label for="one" class="box py-2 first">
                    <div class="d-flex align-items-start"> <span class="circle"></span>
                        <div class="course">
                            <div class="d-flex align-items-center justify-content-between mb-2"> <span class="fw-bold"> Collection 01 </span> <span class="fas fa-dollar-sign">29</span> </div> <span>10 x Presets. Released in 2018</span>
                        </div>
                    </div>
                </label> <label for="two" class="box py-2 second">
                    <div class="d-flex"> <span class="circle"></span>
                        <div class="course">
                            <div class="d-flex align-items-center justify-content-between mb-2"> <span class="fw-bold"> Collection 01 </span> <span class="fas fa-dollar-sign">29</span> </div> <span>10 x Presets. Released in 2018</span>
                        </div>
                    </div>
                </label> <label for="three" class="box py-2 third">
                    <div class="d-flex"> <span class="circle"></span>
                        <div class="course">
                            <div class="d-flex align-items-center justify-content-between mb-2"> <span class="fw-bold"> Collection 01 </span> <span class="fas fa-dollar-sign">29</span> </div> <span>10 x Presets. Released in 2018</span>
                        </div>
                    </div>
                </label> </div>
        </div> --}}
        <!-- Pricing Area Start -->
        <div class="pricing-area pt-95 pb-120 bg-gray" >
            <div class="container">
                {{-- <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title text-center">
                            <h2><span class="span">{{explode(" ",$titrePricing->titre)[0]}}</span> {{explode(" ",$titrePricing->titre)[1]}}</h2>
                            <p>{{$titrePricing->description}}</p>
                        </div>
                    </div>
                </div> --}}
                <div class="row" style="width: 100vw; height:120vh;">
                        
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
                            </div>
                        </div>
                    </div>
                

                </div>
            </div>
        </div>
    </div>
    <div class="box-2">
        <div class="box-inner-2">
            <div>
                <p class="fw-bold">Payment Details</p>
                <p class="dis mb-3">Complete your purchase by providing your payment details</p>
            </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
            <form method="POST" action="{{route('paiement.store')}}">
                @csrf
                <div class="mb-3">
                    <p class="dis fw-bold mb-2">Email address</p> <input class="form-control" type="email" value="luke@skywalker.com" name="emailAdress" value="{{old('')}}">
                </div>
                <div>
                    <p class="dis fw-bold mb-2">Card details</p>
                    <div class="d-flex align-items-center justify-content-between card-atm border rounded">
                        <div class="fab fa-cc-visa ps-3"></div> <input type="text" class="form-control" placeholder="Card Details" name="cardnumber">
                        <div class="d-flex w-50"> <input type="text" class="form-control px-0" placeholder="MM/YY" name="cardvalidity" value="{{old('cardvalidity')}}"> <input type="password" maxlength=3 class="form-control px-0" placeholder="CVV" name="cardsecuritycode" value="{{old('cardsecuritycode')}}"> </div>
                    </div>
                    <div class="my-3 cardname">
                        <p class="dis fw-bold mb-2">Cardholder name</p> <input class="form-control" type="text" name="cardname" value="{{old('cardname')}}">
                    </div>
                    <div class="address">
                        <p class="dis fw-bold mb-3">Billing address</p> <select class="form-select" aria-label="Default select example" name="country">
                            <option selected hidden>United States</option>
                            <option value="1">India</option>
                            <option value="2">Australia</option>
                            <option value="3">Canada</option>
                        </select>
                        <div class="d-flex"> <input class="form-control zip" type="text" placeholder="ZIP" name="zipcode" value="{{old('zipcode')}}"> <input class="form-control state" type="text" placeholder="State" name="adress" value="{{old('adress')}}"> </div>
                        <div class=" my-3">
                            <p class="dis fw-bold mb-2">VAT Number</p>
                            <div class="inputWithcheck"> <input class="form-control" type="text" value="GB012345B9" name="numtva" value="{{old('numtva')}}"> <input class="form-control" type="text"  name="package_id" value="{{$package->id}}" hidden> <span class="fas fa-check"></span> </div>
                        </div>
                        <div class="d-flex flex-column dis">
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p>Subtotal</p>
                                <p><span class="fas fa-dollar-sign"></span>{{str_replace('$','',$package->prix)}}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p>VAT<span>(20%)</span></p>
                                <p><span class="fas fa-dollar-sign"></span>{{intval(str_replace('$','',$package->prix))*(0.2)}}</p>
                            </div>
                            <div class="d-flex align-items-center justify-content-between mb-2">
                                <p class="fw-bold">Total</p>
                                <p class="fw-bold"><span class="fas fa-dollar-sign"></span>{{intval(str_replace('$','',$package->prix))*(0.2)+intval(str_replace('$','',$package->prix))}}</p>
                            </div>
                            <button type="submit" class="btn btn-primary mt-2">Pay<span class="fas fa-dollar-sign px-1"></span>{{intval(str_replace('$','',$package->prix))*(0.2)+intval(str_replace('$','',$package->prix))}}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>