



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

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
            <div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="height:75vh;">

                <div class="container p-4">
                
                    <!-- Header Area Start -->
                    <header class="top">
                        <div class="header-area ptb-18 header-sticky">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-2 col-xs-12">
                                        <div class="logo">
                                            <a href=""><img src="{{asset('img/logo/'.$header->logo)}}" alt="COFFEE" /></a>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-xs-12">
                                        <div class="content-wrapper">
                                            <!-- Main Menu Start -->
                                            <div class="main-menu text-center">
                                                <nav>
                                                    <ul>
                                                        <li><a href="">{{$header->li1}}</a></li>
                                                        <li><a href="">{{$header->li2}}</a></li>
                                                        <li><a href="">{{$header->li3}}</a></li>
                                                        <li><a href="">{{$header->li4}}</a></li>
                                                        <li><a href="">{{$header->li5}}</a></li>

                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="mobile-menu hidden-lg hidden-md"></div>
                                            <!-- Main Menu End -->
                                        </div>
                                    </div>
                                    <div class="col-md-2 hidden-sm hidden-xs">
                                        <div class="header-contact text-right " style="transform: tanslateX(40px);">
                                            {{-- <a class="banner-btn" data-text="contact" href="{{route('contact')}}"><span>contact</span></a> --}}
                                            @if (Route::has('login'))
                                                @auth
                                                    
                                                    <a class="banner-btn" data-text="Dashboard" href="" ><span>Dashboard</span></a>
                                                

                                                @else
                                                
                                                <a class="banner-btn" data-text="Log in"  href="{{ route('login') }}"  ><span>Log in</span></a>
                                                
                                                @endauth
                                            @endif
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                    <!-- Header Area End -->
                </div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('headers.show',$header->id)}}" class="btn btn-info"><i class="fas fa-eye fs-5 text-light"></i></a>
                </div>

            </div>

        </x-app-layout>
        @include("back.partials.navBar")
        </div>
    </div>



   <script src="{{asset('js/app.js')}}"></script>
   <script src="{{asset('js/tailwind.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>
</html>



