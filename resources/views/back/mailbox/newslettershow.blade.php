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
    
    <h1 class="fs-4 mt-5">Merci pour votre inscription à notre newsletter, Nous vous souhaitons la bienvenue parmi nous</h1>

</div>


@endsection