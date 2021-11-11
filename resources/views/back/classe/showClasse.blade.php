
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Home Page || Handstand</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon Icon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
		
		<!-- All css here -->

        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        {{-- <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"> --}}
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/shortcode/shortcodes.css')}}">
        <link rel="stylesheet" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" href="{{asset('css/tailwind.css')}}">

        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        @include('front.partials.home-page.header')
        @if(!Route::is('classes.showClasse') && !Route::is('home'))
           @include('front.partials.bannerModel')
        @endif
        
        @include('back.partials.flash-message')


        <div class="container-fluid details-classe mb-5" >
            <h1 class="text-decoration-underline text-center m-5">Détails de la classe: <span class="nom">{{$classe->nom}}</span> </h1>
            {{-- <div class="container border border-info">
                <div class="img-class-details">
                    <img src="{{asset('img/class/'.$classe->image)}}" class="img-class" alt="...">
                </div>

                <div class="classe-details-content ">
                    <p class=""><span class="underline">Horaire:</span> <span class="  text-gray">{{$classe->horaire}}</span></p>
                    <p class=""><span class="underline">Catégorie: </span><span class="  text-gray">{{$classe->categorie->nom}}</span></p>
                    <p class=""><span class="underline">Prioritaire:</span> <span class="  text-gray">{{$classe->prioritaire===1?'Oui':'Non'}}</span></p>
                    <p class=""><span class="underline">Nombre de personne inscrite:</span> <span class="  text-gray">{{$classe->users->count()}}</span></p>
                    <p class=""><span class="underline">Tag(s):</span> <span class="  text-gray">
                    @foreach ($classe->tags as $tag )
                    {{$tag->nom}},
                        
                    @endforeach    
                    </span></p>
                    <div class="container-btn d-flex justify-content-evenly">
                    <form action="{{route('inscription',["classeId"=>$classe->id,"userId"=> Auth::user()->id])}}" method="POST" class="d-flex justify-content-center">

                        @csrf

                            <button type="submit" class="btn btn-info my-2">Inscription</button>
                    </form>      
                    <form action="{{route('désinscription', ["classeId"=>$classe->id,"userId"=> Auth::user()->id])}}" method="POST" class="d-flex justify-content-center">

                        @csrf

                            <button type="submit" class="btn btn-dark my-2">Désinscription</button>
                    </form>      
                    </div>            
                </div>

            </div> --}}
                <div class="card m-3 {{$classe->color ==="green"?'green':''}} {{$classe->color ==="orange"?'orange':''}} {{$classe->color ==="green"?'green':''}} {{$classe->color ==="red"?'red':''}} " style="width: 18rem;">
                    <img src="{{asset('img/class/'.$classe->image)}}" class="card-img-top img-class" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center"><span class="text-decoration-underline">Horaire:</span> <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->horaire}}</span></h5>
                        <p class="card-text text-center"><span class="text-decoration-underline">Catégorie:</span> <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->categorie->nom}}</span></p>
                        <p class="card-text text-center"><span class="text-decoration-underline">Prioritaire:</span> <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->prioritaire===1?'Oui':'Non'}}</span></p>
                        <p class="card-text text-center"><span class="text-decoration-underline">Nombre de personne(s) inscrite(s):</span> <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{$classe->users->count()}}</span></p>
                        <p class="card-text text-center"><span class="text-decoration-underline">Tag(s):</span> <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">
                        @foreach ($classe->tags as $tag )
                        {{$tag->nom}},
                            
                        @endforeach    
                        </span></p>
                        <p class="card-text text-center"><span class="text-decoration-underline">Date du cours:</span> <span class="  {{$classe->prioritaire?'text-light':'text-info'}}">{{date("d F Y",strtotime($classe->date))}}</span></p>

                        <div class=" w-75 d-flex justify-content-evenly mx-auto">
                            {{-- {{dd(Auth::user()->id)}} --}}
                        <form action="{{route('inscription',["classeId"=>$classe->id,"userId"=> Auth::user()->id])}}" method="POST" class="d-flex justify-content-center">

                            @csrf

                                <button type="submit" class="btn btn-info my-2">Inscription</button>
                        </form>      
                        <form action="{{route('désinscription', ["classeId"=>$classe->id,"userId"=> Auth::user()->id])}}" method="POST" class="d-flex justify-content-center">

                            @csrf

                                <button type="submit" class="btn btn-dark my-2">Désinscription</button>
                        </form>      
                        </div>
                    </div>
                </div> 
        </div>
        {{-- <div class="my-3">

            @include('front.partials.map')
        </div> --}}
        {{-- @include('front.partials.newsletter-area') --}}
        @include('front.partials.footer')
       
		<!-- All js here -->
        <script src="{{asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
        {{-- <script src="{{asset('js/bootstrap.min.js')}}"></script> --}}
        <script src="{{asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('js/jquery.meanmenu.js')}}"></script>
        <script src="{{asset('js/ajax-mail.js')}}"></script>
        <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>   		
        <script src="{{asset('js/slick.min.js')}}"></script>    
        <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{asset('js/isotope.pkgd.min.js')}}"></script>  
        <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>  
        <script src="{{asset('js/plugins.js')}}"></script>
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSLSFRa0DyBj9VGzT7GM6SFbSMcG0YNBM "></script>  --}}

        <script src="{{asset('js/app.js')}}"></script>
        {{-- <script src="{{asset('js/tailwind.js')}}"></script> --}}
        <script src="{{asset('js/main.js')}}"></script>
    </body>
</html>



<script>
    var tabBtnCloses = Array.from(document.getElementsByClassName('close'))
    console.log(tabBtnCloses)
    tabBtnCloses.forEach(elt => {
        elt.addEventListener('click',()=>{
            elt.parentNode.classList.add('hidden-msg');
        })
    });
</script>


<style>

.hidden-msg{
    display: none;
}
.details-classe{
    /* display: flex;
    justify-content: center; */
    height: 120vh;
}
.details-classe .nom{
    color: #5fc7ae;
}

.details-classe .container{
    height: 100vh;
}
.details-classe .card{
    width: 40% !important;
    margin: 0 auto !important;

}
.details-classe .container .img-class-details{
    border: 1px solid orange;
    width: 75%;

    margin: 0 auto;
}
.details-classe .container .classe-details-content >*{
    width: fit-content;
}
.details-classe .container .classe-details-content{
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid pink;
    width: 75%;
    margin: 0 auto;


}

.details-classe .container .classe-details-content *{
    color:black;
}
.details-classe .container .classe-details-content .underline{
    text-decoration: underline;
}

.details-classe .container .classe-details-content .text-gray{
    color:gray;
    text-decoration: none;

}
/* .details-classe .container .classe-details-content .btn-dark{
    border-radius: 5px;
    color: white;
    background-color: black;
} */
.details-classe  .btn-dark:hover{
    filter: brightness(2);
    /* background-color: #5fc7ae; */
}
.details-classe .container .classe-details-content .container-btn{
    display: flex;
    border: 2px solid yellow;
    width: 35%;
    justify-content: space-evenly;
}

h1{
    font-size: 1.5vw;
    margin-bottom: 1vh;
}
.img-class {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 100%; /* Set a small width */
  height: 100%; /* Set a small width */
  margin: 0 auto;

}

/* Add a hover effect (blue shadow) */
.img-class:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>

