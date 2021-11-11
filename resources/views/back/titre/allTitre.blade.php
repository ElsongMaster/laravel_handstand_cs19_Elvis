@extends('back.template.main')







@section('backContent')
    <h1 class="text-center text-decoration-underline fs-4 fw-bold my-3">Liste des titres</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">titre</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($titres as $titre )
          
      <tr>
        <th scope="row">{{$titre->id}}</th>
        <td>{{$titre->titre}}</td>
        <td class="d-flex justify-content-evenly">
            <a href="{{route('titres.show',$titre->id)}}" class="btn btn-info my-2 mr-2"><i class="fas fa-eye"></i></a>

        </td>
      </tr>
      @endforeach

  </tbody>
</table>

@endsection