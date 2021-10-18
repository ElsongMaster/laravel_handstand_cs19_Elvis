@extends('back.template.main')
@section('backContent')
<div class="container d-flex flex-column  mb-2 vh-100">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error )
          <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif


 <h1 class="text-center my-3"> Update Data Titre</h1>
<form action="{{route('titres.update',$titre->id)}}" method="POST" enctype="multipart/form-data" >
            @method('PUT')
            @csrf
            <h1 class="text-center">EDIT titre</h1>


            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">titre</label>
                <input type="text" value="{{$titre->titre}}" class="form-control w-25" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre">
            </div>
            @if ($titre->description!=null)
              
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Description</label>
                <input type="text" class="form-control w-25" value="{{$titre->description}}"id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
            </div>
            @endif
           <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
@endsection

