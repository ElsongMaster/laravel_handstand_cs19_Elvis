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


 <h1 class="text-center my-3"> Update Data Gallerie</h1>

<form action="{{route('galleries.update',$gallery->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file"   class="form-control" id="image" name="image" >
</div>
<div class="mb-3" hidden>
    <label for="position" class="form-label">Position</label>
    <input type="text" value="{{$gallery->position}}"  class="form-control" id="position" name="position" >
</div>

<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>


@endsection