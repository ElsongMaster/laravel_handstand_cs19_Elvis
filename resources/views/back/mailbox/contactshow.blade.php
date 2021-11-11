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

    <h1 class="fs-4 mt-5">Demande utilisateur</h1>
    <div class="info-sender">
        <p class="my-1" >Nom utilisateur: <span>{{$emailsended->texte[0]}}</span></p>
        <p>Adresse mail: <span>{{$emailsended->texte[1]}}</span></p>
    </div>

    <h1 class="my-1" >Sujet de la demande:</h1>

    <p class="mt-3" id="text-mail">{{$emailsended->texte[2]}}</p>

</div>
<script>
    var text = document.getElementById('text-mail');
    var tabStr = text.innerText.split('');
    if(text.innerText.length>30){
        text.innerHTML = ""
        for(var i =0;i<tabStr.length;i++){
            text.innerHTML += tabStr[i];
            if(i>0 && i%60 ===0){
                text.innerHTML += '<br\>';
            }
        }
    }

</script>

@endsection