@extends('back.template.main')








@section('backContent')


<div class="container d-flex flex-column  mb-2 w-75" >

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif



 <h1 class="text-center my-3"> Create Data Event</h1>

<form action="{{route('events.store')}}" method="post"   >
    @csrf




<div class="mb-3">
    <label for="titre" class="form-label">Titre</label>
    <input type="text" value = "{{old('titre')}}"   class="form-control" id="titre" name="titre" >
</div>

<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" value = "{{old('description')}}"   class="form-control" id="description" name="description" >
</div>

<div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" value = "{{old('date')}}"   class="form-control" id="date" name="date" >
</div>

<div class="mb-3">
    <label for="heure" class="form-label">Heure</label>
    <input type="texte" value = "{{old('heure')}}" placeholder="10AM - 12AM"  class="form-control" id="heure" name="heure" >
</div>

<div class="mb-3">
    <label for="selected" class="form-label">Prioritaire</label>
    <select name="selected" id="selected">


        <option value={{1}} >Oui</option>
        <option value={{0}} selected>Non</option> 



    </select>
</div>
<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
<script>
  $(function() {
    $('.multiple-select').multipleSelect()
  })
</script>
@endsection
