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


 <h1 class="text-center my-3"> Update Data About</h1>

<form action="{{route('abouts.update',$about->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file"   class="form-control" id="image" name="image" >
</div>
<div class="mb-3">
    <label for="p1" class="form-label">Texte 1</label>
    <input type="text" value = "{{$about->p1}}"   class="form-control" id="p1" name="p1" >
</div>
<div class="mb-3">
    <label for="p2" class="form-label">Texte 2</label>
    <input type="text" value = "{{$about->p2}}"   class="form-control" id="p2" name="p2" >
</div>
<div class="mb-3">
    <label for="btn" class="form-label">Texte bouton</label>
    <input type="text" value = "{{$about->btn}}"   class="form-control" id="btn" name="btn" >
</div>
<div class="mb-3">
    <label for="video" class="form-label">lien video</label>
    <input type="text" value = "{{$about->video}}"   class="form-control" id="video" name="video" >
</div>




<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
