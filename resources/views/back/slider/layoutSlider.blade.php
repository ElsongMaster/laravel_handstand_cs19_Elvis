






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/shortcode/shortcodes.css')}}">

    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">


    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">

    <title>Document</title>
</head>
<body>
     <div class="container-fluid">

        <div class="container w-75  ">
        <x-app-layout >
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>
            @include('back.partials.flash-message')
                <div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="height:75vh; background-color:white;">

                    <div class="container p-4" >
                <!-- Background Area Start -->
                        <div class="slider-area" >	
                            <div class="slider-wrapper" >
                                @foreach ($sliders as $slider )
                                <div class="single-slide " style="background-image: url({{asset('img/slider/'.$slider->image)}});" >
                                    <div class="slider-content">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-7 col-md-7 col-sm-12 col-md-12">
                                                    <div class="text-content-wrapper">
                                                        <div class="text-content text-left">
                                                            <h5>{{$slider->titre}}</h5>
                                                            <h1 class="titel">{{$slider->soustitre}}</h1>
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
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="{{route('sliders.index')}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
                    </div>

                </div>

        </x-app-layout>
        @include("back.partials.navBar")
        </div>
    </div>



   <script src="{{asset('js/app.js')}}"></script>
   {{-- <script src="{{asset('js/tailwind.js')}}"></script> --}}
    <script src="{{asset('js/slick.min.js')}}"></script>  
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script>
            var tabBtnCloses = Array.from(document.getElementsByClassName("close"));
             console.log(tabBtnCloses);
            tabBtnCloses.forEach((elt) => {
                elt.addEventListener("click", () => {
                    elt.parentNode.classList.add("hidden-msg");
                });
            });

            function changeColorTitel(){
                var $titels = Array.from(document.getElementsByClassName('titel'));
                
                 $titels.forEach(elt => {
                    if(elt.innerText.includes('(') && elt.innerText.includes(')')){

                        var index1 = elt.innerText.indexOf('(');
                        var index2 = elt.innerText.indexOf(')');
                        elt.innerText = elt.innerText.replace('(','')
                        elt.innerText = elt.innerText.replace(')','')
                        var str = elt.innerText.substr(index1,index2)
                        elt.innerHTML = elt.innerText.substr(0,index1)+str.fontcolor("#5fc7ae")+elt.innerText.substr(index2)
                        
                    }
                 });


            }
            changeColorTitel();
    </script>
        <style>
            .hidden-msg{
                display: none;

            }

            .colorTitle{
                color: #5fc7ae;
            }

        </style>
</body>
</html>







