@extends('back.template.main')



@section('backContent')

<p class="text-center my-3"><a href="{{route('emailsendeds.index')}}" class="btn btn-info text-light">back to mail box</a></p>
    
<div class="container mx-auto mt-5 w-75" style="background-color: white; heigh:70vh;">

        <div class="headbox">
            <h1 class="fs-4 py-3"><span class="text-decoration-underline">Object:</span>  {{$emailsended->object}}</h1>
            <div class="adress">
                <p>From:<span class="text-secondary"> &lt;handstandofficiel@gmail.com&gt;</span></p>
                <p>To:<span class="text-secondary"> &lt;{{$emailsended->destinataire}}&gt;</span></p>
                <p><span></span></p>
            </div>
        </div>
    
    <h1 class="fs-4 mt-5">Un nouvelle Event à été crée voici les détails:</h1>
    <div class="card m-3" style="width: 40vw;">
        <div class="card-body">
            <h5 class="card-title">Titre: <span class="  text-info">{{$emailsended->texte[0]}}</span></h5>
            <h5 class="card-title">Description: <span class="  text-info">{{$emailsended->texte[1]}}</span></h5>
            <p class="card-text">date: <span class="  text-info">{{$emailsended->texte[2]}}</span></p>
            <p class="card-text">Heure: <span class="  text-info">{{$emailsended->texte[3]}}</span></p>
        </div>
    </div> 
</div>


@endsection