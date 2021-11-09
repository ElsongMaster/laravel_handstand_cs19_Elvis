@extends('front.template.main')



@section('content')


<div class="container-fluid details-classe" >
    <h1 class="text-decoration-underline text-center">Détails de la classe: <span class="nom">{{$classe->nom}}</span> </h1>
    <div class="container border border-info">
        <div class="img-class-details">
            <img src="{{asset('img/class/'.$classe->image)}}" class="card-img-top" alt="...">
        </div>

        <div class="classe-details-content">
            <h5 class="card-title">Nom: <span class="  {{$classe->prioritaire}}">{{$classe->nom}}</span></h5>
            <h5 class="card-title">Horaire: <span class="  {{$classe->prioritaire}}">{{$classe->horaire}}</span></h5>
            <p class="card-text">Catégorie: <span class="  {{$classe->prioritaire}}">{{$classe->categorie->nom}}</span></p>
            <p class="card-text">Prioritaire: <span class="  {{$classe->prioritaire}}">{{$classe->prioritaire===1?'Oui':'Non'}}</span></p>
            <p class="card-text">Effectif: <span class="  {{$classe->prioritaire}}">{{$classe->users->count()}}</span></p>
            <p class="card-text">Tag(s): <span class="  {{$classe->prioritaire}}">
            @foreach ($classe->tags as $tag )
            {{$tag->nom}},
                
            @endforeach    
            </span></p>            
        </div>
    </div>
</div>
<style>
.details-classe{
    height: 65vh;
}
.details-classe .nom{
    color: #5fc7ae;
}

.details-classe .container{
    height: 100%;
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
    border: 1px solid pink;
}

h1{
    font-size: 1.5vw;
}
img {
  border: 1px solid #ddd; /* Gray border */
  border-radius: 4px;  /* Rounded border */
  padding: 5px; /* Some padding */
  width: 45%; /* Set a small width */
  height: 40%; /* Set a small width */
    margin: 0 auto;

}

/* Add a hover effect (blue shadow) */
img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
</style>
@endsection