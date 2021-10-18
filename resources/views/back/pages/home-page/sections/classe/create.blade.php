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


 <h1 class="text-center my-3"> Create Data Classe</h1>

<form action="{{route('classes.store')}}" method="post"   enctype="multipart/form-data" >
    @csrf



<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file"   class="form-control" id="image" name="image" >
</div>
<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text"   class="form-control" id="nom" name="nom" >
</div>
<div class="mb-3">
    <label for="coach_id" class="form-label">Coach</label>
    <input type="text"    class="form-control" id="coach_id" name="coach_id" >
</div>
<div class="mb-3">
    <label for="prioritaire" class="form-label">Prioritaire</label>
    <select name="prioritaire" id="prioritaire">
        <option ngValue="true" >Oui</option>
        <option ngValue="flase">Non</option>
    </select>
</div>
<div class="mb-3">
    <label for="effectif" class="form-label">Nombre de participants</label>
    <input type="text" value = "{{$classe->effectif}}"   class="form-control" id="effectif" name="effectif" >
</div>
<div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" value = "{{$classe->date}}"   class="form-control" id="date" name="date" >
</div>



<div class="d-flex justify-content-center">

    <button type="submit" class="date date-primary">Submit</button>
</div>

</form>

</div>
@endsection
