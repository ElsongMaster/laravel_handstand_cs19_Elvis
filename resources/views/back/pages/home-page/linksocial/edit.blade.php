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


 <h1 class="text-center my-3"> Update Data Linksocial</h1>
{{-- {{dd($coachId)}} --}}
<form action="{{route('updateLink',["linksocial"=>$linksocial,"coachId"=>$linksocial->coach->id])}}" method="post"  class="border" >
    @csrf




<div class="mb-3">
    <label for="name" class="form-label">Name icon</label>

<select name="icon_id" id="name-select">
    @foreach ( $icons as $icon )
        @if ($icon->id === $linksocial->icon->id)
        
            <option selected value="{{$icon->id}}">{{$icon->nom}}</option>
        @else
            <option value="{{$icon->id}}">{{$icon->nom}}</option>
            
        @endif
        
    @endforeach

</select>
</div>


<div class="mb-3">
    <label for="lien" class="form-label">Lien</label>
    <input type="text" value = "{{$linksocial->lien}}"   class="form-control" id="lien" name="lien" >
</div>






<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
@endsection
