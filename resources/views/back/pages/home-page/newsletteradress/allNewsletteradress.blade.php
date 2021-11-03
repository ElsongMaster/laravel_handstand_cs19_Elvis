@extends('back.template.main')







@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Adresse</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($newsletteradresses as $adress )
          
      <tr>
        <th scope="row">{{$adress->id}}</th>
        <td>{{$adress->email}}</td>
        <td class="d-flex justify-content-evenly">
          <form action="{{route('newsletteradresses.destroy',$adress->id)}}" method="post">
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
          </form>
        </td>
      </tr>
      @endforeach

  </tbody>
</table>

@endsection