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


 <h1 class="text-center my-3"> Update Data coach</h1>

 <h2 class="text-uppercase my-4">Information relative au coach</h2>
<form action="{{route('coaches.update',$coach->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file"   class="form-control" id="image" name="image" >
</div>
<div class="mb-3 border">
    @foreach ($coach->linksocials as $linksocial)
     <p class="my-4 position-relative"><span><i class="{{$linksocial->icon->nomClass}}"></i>: {{$linksocial->lien}} </span><span class="position-absolute end-0"><a href="{{route('linksocials.edit',$linksocial->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a></span> </p>  
    @endforeach
        {{-- <div class="d-flex justify-content-center">
            <a href="{{route('linksocials.edit',$team->id)}}" class="btn btn-warning me-3 mb-3"><i class="fas fa-edit"></i></a>
        </div> --}}

</div>






<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

<h2 class="text-uppercase mb-3 mt-5" >Informations personnelles lié au user</h2>
<form action="{{route('users.update',$coach->user->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')



<div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" value = "{{$coach->user->name}}"   class="form-control" id="name" name="name" >
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" value = "{{$coach->user->email}}"   class="form-control" id="email" name="email" >
</div>

<div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" value = "{{$coach->user->password}}"   class="form-control" id="password" name="password" >
</div>




<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
