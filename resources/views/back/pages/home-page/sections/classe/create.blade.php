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


 <h1 class="text-center my-3"> Create Data Classe</h1>

<form action="{{route('classes.store')}}" method="post"   enctype="multipart/form-data" >
    @csrf



<div class="mb-3">
    <label for="image" class="form-label">Image</label>
    <input type="file"   class="form-control" id="image" name="image" >
</div>
<div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" value = "{{old('nom')}}"   class="form-control" id="nom" name="nom" >
</div>
{{-- Limiter l'accès à la création de classe seulement au user avec role coach et coach lead --}}
{{-- <div class="mb-3" hidden>
    <label for="coach_id" class="form-label">Coach</label>
    <input type="text" value = "{{Auth::user()->id}}"   class="form-control" id="coach_id" name="coach_id" >
</div> --}}
<div class="mb-3">
    <label for="horaire" class="form-label">Horaire</label>
    <select name="horaire" id="horaire">


        <option value={{"8.00Am-10.00Am"}} >8.00Am-10.00Am</option>
        <option value={{"10.00Am-12.00Am"}} >10.00Am-12.00Am</option>
        <option value={{"1.00Pm-3.00Pm"}} >1.00Pm-3.00Pm</option>
        <option value={{"3.00Pm-6.00Pm"}} >3.00Pm-6.00Pm</option>



    </select>
</div>
<div class="mb-3">
    <label for="prioritaire" class="form-label">Prioritaire</label>
    <select name="prioritaire" id="prioritaire">


        <option value={{1}} >Oui</option>
        <option value={{0}} selected>Non</option> 



    </select>
</div>
<div class="mb-3">
    <label for="categorie_id" class="form-label">Catégorie</label>
    <select name="categorie_id" id="categorie_id" >
        @foreach ($categories as $categorie )
            
            <option value="{{$categorie->id}}">{{$categorie->nom}}</option>
                

        @endforeach

    </select>
</div>
<div class="mb-3">

    <label for="tags" class="form-label">Tag(s)</label>

    <select  multiple="multiple" class="multiple-select" name="tags[]" id="tags" >
        @foreach ($tags as $tag )


            <option value="{{$tag->id}}" >{{$tag->nom}}</option>
                

        @endforeach

    </select>
</div>
<div class="mb-3">

    <label for="tags" class="form-label">Packages des personnes pouvant avoir accès au cours</label>

    <select  multiple="multiple" class="multiple-select" name="package[]" id="tags" >
        @foreach ($packages as $package )


            <option value="{{$package->nom}}" >{{$package->nom}}</option>
                

        @endforeach

    </select>
</div>

<div class="mb-3">
    <label for="date" class="form-label">Date</label>
    <input type="date" value = "{{old('date')}}"   class="form-control" id="date" name="date" >
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
