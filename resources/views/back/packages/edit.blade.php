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


 <h1 class="text-center my-3"> Update Data package</h1>

<h2 class="text-uppercase my-4">Information relative au package</h2>
<form action="{{route('packages.update',$package->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


    <div class="mb-3">
        <label for="nom" class="form-label">nom</label>
        <input type="text" value="{{$package->nom}}"  class="form-control" id="nom" name="nom" >
    </div>
    <div class="mb-3">
        <label for="titre" class="form-label">titre</label>
        <input type="text" value="{{$package->titre}}"  class="form-control" id="titre" name="titre" >
    </div>
    <div class="mb-3">
        <label for="prix" class="form-label">prix</label>
        <input type="text" value="{{$package->prix}}"   class="form-control" id="prix" name="prix" >
    </div>
    <div class="mb-3">
        <label for="frequence" class="form-label">frequence</label>
        <input type="text"  value="{{$package->frequence}}"  class="form-control" id="frequence" name="frequence" >
    </div>
    <div class="mb-3">
        <label for="li1" class="form-label">li1</label>
        <input type="text" value="{{$package->li1}}"  class="form-control" id="li1" name="li1" >
    </div>
    <div class="mb-3">
        <label for="li2" class="form-label">li2</label>
        <input type="text" value="{{$package->li2}}"  class="form-control" id="li2" name="li2" >
    </div>
    <div class="mb-3">
        <label for="li3" class="form-label">li3</label>
        <input type="text" value="{{$package->li3}}"  class="form-control" id="li3" name="li3" >
    </div>
    <div class="mb-3">
        <label for="li4" class="form-label">li4</label>
        <input type="text" value="{{$package->li4}}"  class="form-control" id="li4" name="li4" >
    </div>

    <div class="mb-3">
        <label for="btn" class="form-label">btn</label>
        <input type="text" value="{{$package->btn}}"  class="form-control" id="btn" name="btn" >
    </div>







    <div class="d-flex justify-content-center">

        <button type="submit" class="btn btn-primary">Submit</button>
    </div>

</form>
</div>
@endsection
