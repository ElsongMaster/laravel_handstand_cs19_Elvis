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


 <h1 class="text-center my-3"> Update Data Header</h1>

<form action="{{route('headers.update',$header->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="logo" class="form-label">Logo</label>
    <input type="file"   class="form-control" id="logo" name="logo" >
</div>
<div class="mb-3">
    <label for="li1" class="form-label">Nom lien 1</label>
    <input type="text" value = "{{$header->li1}}"   class="form-control" id="li1" name="li1" >
</div>
<div class="mb-3">
    <label for="li2" class="form-label">Nom lien 2</label>
    <input type="text" value = "{{$header->li2}}"   class="form-control" id="li2" name="li2" >
</div>
<div class="mb-3">
    <label for="li3" class="form-label">Nom lien 3</label>
    <input type="text" value = "{{$header->li3}}"   class="form-control" id="li3" name="li3" >
</div>
<div class="mb-3">
    <label for="li4" class="form-label">Nom lien 4</label>
    <input type="text" value = "{{$header->li4}}"   class="form-control" id="li4" name="li4" >
</div>
<div class="mb-3">
    <label for="li5" class="form-label">Nom lien 5</label>
    <input type="text" value = "{{$header->li5}}"   class="form-control" id="li5" name="li5" >
</div>



<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
