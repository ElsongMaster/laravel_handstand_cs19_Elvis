@extends('back.template.main')








@section('backContent')
<div class="container d-flex flex-column  mb-2 w-75">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Data Event</h1>

<form action="{{route('events.update',$event->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="titre" class="form-label">Titre</label>
    <input type="text" value = "{{$event->titre}}"   class="form-control" id="titre" name="titre" >
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" value = "{{$event->description}}"   class="form-control" id="description" name="description" >
</div>

<div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" value = "{{$event->date}}"   class="form-control" id="date" name="date" >
</div>

<div class="mb-3">
    <label for="heure" class="form-label">Heure</label>
    <input type="texte" value = "{{$event->heure}}" placeholder="10AM - 12AM"  class="form-control" id="heure" name="heure" >
</div>

<div class="mb-3">
    <label for="selected" class="form-label">Prioritaire</label>
    <select name="selected" id="selected">

        @if ($event->selected)
        
            <option value={{1}} selected >Oui</option>
            <option value={{0}} >Non</option> 
        @else
            <option value={{0}} selected>Non</option> 
            <option value={{1}} >Oui</option> 
            
        @endif

    </select>
</div>

<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>

@endsection
