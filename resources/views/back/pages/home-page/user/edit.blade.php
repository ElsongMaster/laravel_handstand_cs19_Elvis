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


 <h1 class="text-center my-3"> Create Data user</h1>




<form action="{{route('users.store')}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')



<div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" value = "{{old('name')}}"   class="form-control" id="name" name="name" >
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" value = "{{old('email')}}"   class="form-control" id="email" name="email" >
</div>

<div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input type="password" value = "{{old('password')}}"   class="form-control" id="password" name="password" >
</div>




<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
