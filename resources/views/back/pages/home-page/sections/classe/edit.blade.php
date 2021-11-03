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


 <h1 class="text-center my-3"> Update Data Classe</h1>

<form action="{{route('classes.update',$class->id)}}" method="post"   enctype="multipart/form-data" >
    @csrf
    @method('PUT')


<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file"   class="form-control" id="image" name="image" >
</div>
<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" value = "{{$class->nom}}"   class="form-control" id="nom" name="nom" >
</div>
<div class="mb-3">
    <label for="coach_id" class="form-label">Coach</label>
    <input type="text" value = "{{$class->coach_id}}"   class="form-control" id="coach_id" name="coach_id" >
</div>
<div class="mb-3">
    <label for="horaire" class="form-label">Horaire</label>
    <input type="text" value = "{{$class->horaire}}"   class="form-control" id="horaire" name="horaire" >
</div>
<div class="mb-3">
    <label for="prioritaire" class="form-label">Prioritaire</label>
    <select name="prioritaire" id="prioritaire">
        @if ($class->prioritaire)
        <option value={{1}} selected>Oui</option>
        <option value={{0}}>Non</option>
            
        @else

        <option value={{1}} >Oui</option>
        <option value={{0}} selected>Non</option> 

        @endif

    </select>
</div>
<div class="mb-3">
    <label for="categorie_id" class="form-label">Catégorie</label>
    <select name="categorie_id" id="categorie_id" >
        @foreach ($categories as $categorie )
            
            @if ($class->categorie_id === $categorie->id)
            <option value="{{$categorie->id}}" selected>{{$categorie->nom}}</option>
                
            @else

            <option value="{{$categorie->id}}" >{{$categorie->nom}}</option>

            @endif
        @endforeach

    </select>
</div>
<div class="mb-3">

    <label for="tags" class="form-label">Tag(s)</label>

    <select  multiple="multiple" class="multiple-select" name="tags[]" id="tags" >
        @foreach ($tags as $tag )


            @if (in_array($tag->id,$tagToSelected))
            <option value="{{$tag->id}}" selected>{{$tag->nom}}</option>
                
            @else

            <option value="{{$tag->id}}" >{{$tag->nom}}</option>

            @endif
        @endforeach

    </select>
</div>

<div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" value = "{{$class->date}}"   class="form-control" id="date" name="date" >
</div>



<div class="d-flex justify-content-center">

    <button type="submit" class="btn btn-primary">Submit</button>
</div>

</form>

</div>
<script>
  $(function() {
    $('.multiple-select').multipleSelect()
  })
</script>
@endsection
