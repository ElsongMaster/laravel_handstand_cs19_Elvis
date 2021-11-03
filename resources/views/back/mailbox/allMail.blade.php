@extends('back.template.main')







@section('backContent')
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Object</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($emails as $email )
          
      <tr>
        <th scope="row">{{$email->id}}</th>
        <td>{{$email->object}}</td>
        <td class="d-flex justify-content-evenly">
            <a href="{{$email->typemail==="inscription"?route('emailsendeds.show',$email->id):route('emailsendeds.show2',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
          <form action="{{route('emailsendeds.destroy',$email->id)}}" method="post">
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