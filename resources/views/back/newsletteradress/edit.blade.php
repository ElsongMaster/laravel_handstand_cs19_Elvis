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


 <h1 class="text-center my-3"> Update Data newsletteradresses</h1>

<form action="{{route('newsletteradresses.update',$newsletteradress->id)}}" method="post"    >
    @csrf
    @method('PUT')



<div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="text" value = "{{$newsletteradress->email}}"   class="form-control" id="email" name="email" >
</div>




<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
