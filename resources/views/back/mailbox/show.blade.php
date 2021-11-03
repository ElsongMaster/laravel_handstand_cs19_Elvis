@extends('back.template.main')



@section('backContent')

<p class="text-center my-3"><a href="{{route('emailsendeds.index')}}" class="btn btn-info text-light">back to mail box</a></p>
    
<div class="container mx-auto mt-5 w-75" style="background-color: white">

        <div class="headbox">
            <h1 class="fs-4 py-3"><span class="text-decoration-underline">Object:</span>  {{$emailsended->object}}</h1>
            <div class="adress">
                <p>From:<span class="text-secondary"> &lt;handstandofficiel@gmail.com&gt;</span></p>
                <p>To:<span class="text-secondary"> &lt;{{$emailsended->user->email}}&gt;</span></p>
                <p><span></span></p>
            </div>
        </div>
    
        <div class="contentmail mt-5">
        <h2 class="fs-5 py-3">Félicitation ! {{$emailsended->user->name}} pour votre inscription au cours de {{$emailsended->classe->nom}}</h1>

        <p>Voici les détails du cours:</p>
            <div class="card" style="width: 18rem;">
                <img src="{{asset('img/class/'.$emailsended->classe->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nom:<span class="text-info">{{$emailsended->classe->nom}}</span></h5>
                    <p class="card-text">Horaire:<span class="text-info">{{$emailsended->classe->horaire}}</span></p>
                    <p class="card-text">Catégorie:<span class="text-info">{{$emailsended->classe->categorie->nom}}</span></p>
                    <p class="card-text">Nombre de personnes inscrite:<span class="text-info">{{$emailsended->classe->users->count()}}</span></p>
                    <p class="card-text">Date du cours:<span class="text-info">{{$emailsended->classe->date}}</span></p>
                </div>
            </div>
    </div>
</div>


@endsection