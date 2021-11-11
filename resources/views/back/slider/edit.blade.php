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


 <h1 class="text-center my-3"> Update Data Slider</h1>

<form action="{{route('sliders.update',$slider->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file"   class="form-control" id="image" name="image" >
</div>
<div class="mb-3">
    <label for="titre" class="form-label">titre</label>
    <input type="text" value = "{{$slider->titre}}"   class="form-control" id="titre" name="titre" >
</div>
<div class="mb-3">
    <label for="soustitre" class="form-label">Sous titre</label>
    <input type="text" value = "{{$slider->soustitre}}"   class="form-control" id="soustitre" name="soustitre" >
</div>
<div class="mb-3">
    <label for="span" class="form-label">Span</label>
    <input type="text" value = "{{$slider->span}}"   class="form-control" id="span" name="span" >
</div>
<div class="mb-3">
    <label for="texte" class="form-label">Texte</label>
    <input type="text" value = "{{$slider->texte}}"   class="form-control" id="texte" name="texte" >
</div>
<div class="mb-3">
    <label for="btn" class="form-label">Btn</label>
    <input type="text" value = "{{$slider->btn}}"   class="form-control" id="btn" name="btn" >
</div>



<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
