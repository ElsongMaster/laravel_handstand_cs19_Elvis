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


 <h1 class="text-center my-3"> Update Data Footerdata</h1>

<form action="{{route('footerdatas.update',$footerdata->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="logo" class="form-label">Logo</label>
    <input type="file"   class="form-control" id="logo" name="logo" >
</div>
<div class="mb-3">
    <label for="titre1" class="form-label">Titre 1</label>
    <input type="text" value = "{{$footerdata->titre1}}"   class="form-control" id="titre1" name="titre1" >
</div>
<div class="mb-3">
    <label for="titre2" class="form-label">Titre 2</label>
    <input type="text" value = "{{$footerdata->titre2}}"   class="form-control" id="titre2" name="titre2" >
</div>
<div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" value = "{{$footerdata->description}}"   class="form-control" id="description" name="description" >
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" value = "{{$footerdata->email}}"   class="form-control" id="email" name="email" >
</div>
<div class="mb-3">
    <label for="tel" class="form-label">Tel</label>
    <input type="text" value = "{{$footerdata->tel}}"   class="form-control" id="tel" name="tel" >
</div>


<h4>Details adresse:</h4>
<div class="mb-3">
    <label for="street" class="form-label">Nom de rue</label>
    <input type="text" value = "{{$footerdata->map->street}}"   class="form-control" id="street" name="street" >
</div>
<div class="mb-3">
    <label for="numero" class="form-label">Numéro dans la rue</label>
    <input type="text" value = "{{$footerdata->map->numero}}"   class="form-control" id="numero" name="numero" >
</div>
<div class="mb-3">
    <label for="zipcode" class="form-label">Code postal</label>
    <input type="text" value = "{{$footerdata->map->zipcode}}"   class="form-control" id="zipcode" name="zipcode" >
</div>
<div class="mb-3">
    <label for="city" class="form-label">Ville</label>
    <input type="text" value = "{{$footerdata->map->city}}"   class="form-control" id="city" name="city" >
</div>
<h4>Détails copyright:</h4>
<div class="mb-3">
    <label for="copyright" class="form-label">Copyright partie en gras</label>
    <input type="text" value = "{{$footerdata->copyright[0]}}"   class="form-control" id="copyright" name="copyright" >
</div>
<div class="mb-3">
    <label for="copyright" class="form-label">Copyright année</label>
    <input type="text" value = "{{$footerdata->copyright[1]}}"   class="form-control" id="copyright" name="copyright" >
</div>



<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
