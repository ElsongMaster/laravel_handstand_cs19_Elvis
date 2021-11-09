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




<form action="{{route('users.update',$user->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')



<div class="mb-3">
    <label for="name" class="form-label">Nom</label>
    <input type="text" value = "{{$user->name}}"   class="form-control" id="name" name="name" >
</div>
<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" value = "{{$user->email}}"   class="form-control" id="email" name="email" >
</div>

<div class="mb-3">
    <label for="password" class="form-label">Mot de passe</label>
    <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" />
        <div class="input-group-append">
        <span class="input-group-text" onclick="password_show_hide();">
            <i class="fas fa-eye" id="show_eye"></i>
            <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
        </span>
        </div>
</div>




<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
