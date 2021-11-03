@extends('back.template.main')







@section('backContent')

<div class="container mt-5 w-100" style="background-color: white">
    <h1 class="text-center text-decoration-underline fs-4 fw-bold my-3">MailBox</h1>

    <div class="icon_mail w-25 mx-auto border d-flex justify-content-evenly">
     <i class="fas fa-mail-bulk fs-2"></i>  <i class="fas fa-envelope-square fs-2"></i> <i class="fas fa-envelope-open-text fs-2"></i>
    </div>
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
              
          <tr style="{{$email->lu?'':'background-color: rgb(214,214,214);'}}"    >
            <th scope="row">{{$email->id}}</th>
            <td>{{$email->object}}</td>
            <td class="d-flex justify-content-evenly">
                @if ($email->typemail==="inscription")
                    <a href="{{route('emailsendeds.show',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                    
                @elseif ($email->typemail==="création")
                    <a href="{{route('emailsendeds.show2',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                @elseif ($email->typemail==="newsletter")
                <a href="{{route('emailsendeds.newslettershow',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                
                @else
                <a href="{{route('emailsendeds.contactshow',$email->id)}}" class="btn btn-info"><i class="fas fa-eye"></i></a>

                    
                @endif
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

</div>    
@endsection