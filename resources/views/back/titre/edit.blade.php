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
 <div class="container-fluid d-flex justify-content-center ">
     <div class="container" style="width: 100%">

         <form class="text-center" action="{{route('titres.update',$titre->id)}}" method="POST" enctype="multipart/form-data" >
                     @method('PUT')
                     @csrf
         
         
                     <div class="mb-3 d-flex flex-column align-items-center " >
                         <label for="exampleInputEmail1" class="form-label border">titre</label>
                         <input type="text" value="{{$titre->titre}}" class="form-control w-25 border" id="exampleInputEmail1" aria-describedby="emailHelp" name="titre">
                     </div>
                     @if ($titre->description!=null)
                       
                     <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Description</label>
                         <input type="text" class="form-control w-25" value="{{$titre->description}}"id="exampleInputEmail1" aria-describedby="emailHelp" name="description">
                     </div>
                     @endif
                    <button type="submit" class="btn btn-primary " >Submit</button>
             </form>
         
         </div>
     </div>
 </div>
@endsection

