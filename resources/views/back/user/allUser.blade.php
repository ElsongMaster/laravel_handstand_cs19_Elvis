@extends('back.template.main')







@section('backContent')
<div class="container mx-auto">


        <h1 class="text-center text-decoration-underline fs-4 fw-bold my-3">Tous les utilisateurs</h1>
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Id</th>
        <th scope="col">Nom</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user )
            
        <tr>
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td class="d-flex justify-content-evenly">
                <a href="{{route('users.show',$user->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end my-3">
        
        {{$users->links()}}
    </div>

          <div class="container d-flex justify-content-center">
          
              <a href="{{route('users.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
          </div>
</div>
@endsection