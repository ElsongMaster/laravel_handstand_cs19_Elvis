<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    {{-- <link rel="stylesheet" href="{{asset('css/style.css')}}"> --}}
        {{-- <link rel="stylesheet" href="{{asset('css/shortcode/shortcodes.css')}}"> --}}
        {{-- <link rel="stylesheet" href="{{asset('css/slick.css')}}"> --}}
        {{-- <link rel="stylesheet" href="{{asset('css/responsive.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
	{{-- <script src="https://code.jquery.com/jquery-2.2.0.min.js"></script> --}}
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> --}}
{{-- <link href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css" rel="stylesheet"> --}}
<script src="{{asset('js/app.js')}}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
<script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
<script src="js/vendor/modernizr-2.8.3.min.js"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.meanmenu.js')}}"></script>
<script src="{{asset('js/ajax-mail.js')}}"></script>
<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>   		
<script src="{{asset('js/slick.min.js')}}"></script>    
<script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
<script src="{{asset('js/isotope.pkgd.min.js')}}"></script>  
<script src="{{asset('js/jquery.magnific-popup.js')}}"></script>  
<script src="{{asset('js/plugins.js')}}"></script> --}}
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
            @yield("backContent")
        </x-app-layout>
        @include("back.partials.navBar")
        </div>
    </div>



   {{-- <script src="{{asset('js/app.js')}}"></script> --}}
   <script src="{{asset('js/tailwind.js')}}"></script>
</body>
</html>