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


 <h1 class="text-center my-3"> Update Data Map</h1>

<form action="{{route('maps.update',$map->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')



<div class="mb-3">
    <label for="street" class="form-label">Nom de rue</label>
    <input type="text" value = "{{$map->street}}"   class="form-control" id="street" name="street" >
</div>
<div class="mb-3">
    <label for="numero" class="form-label">Numéro dans la rue</label>
    <input type="text" value = "{{$map->numero}}"   class="form-control" id="numero" name="numero" >
</div>
<div class="mb-3">
    <label for="zipcode" class="form-label">Code postal</label>
    <input type="text" value = "{{$map->zipcode}}"   class="form-control" id="zipcode" name="zipcode" >
</div>
<div class="mb-3">
    <label for="city" class="form-label">Ville</label>
    <input type="text" value = "{{$map->city}}"   class="form-control" id="city" name="city" >
</div>




<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
