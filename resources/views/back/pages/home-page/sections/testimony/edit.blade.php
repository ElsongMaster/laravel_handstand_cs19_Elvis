@extends('back.template.main')








@section('backContent')
<div class="container d-flex flex-column  mb-2 w-75">
    <div class="d-flex justify-content-center my-5">

        <a href="{{route('tesimonies.index')}}" class="btn btn-secondary">Retour à la liste des tesimonies</a>
    </div>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Data testimony</h1>

 <h2 class="text-uppercase my-4">Information relative au testimony</h2>
<form action="{{route('tesimonies.update',$testimony->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="singature" class="form-label">Signature</label>
    <input type="file"   class="form-control" id="singature" name="singature" >
</div>
<div class="mb-3">
    <label for="singature" class="form-label">Signature</label>
    <input type="file"   class="form-control" id="singature" name="singature" >
</div>







<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>




<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
