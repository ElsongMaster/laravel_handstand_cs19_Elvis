@extends('back.template.main')










@section('backContent')
    <div class="container">

        <h2 class="text-center fs-2">Toute les données du slider</h2>
    <form action="{{route('update2')}}" method="post"  class="w-50 my-5">
            @csrf
        <div class="mb-3">
            <label for="selected_id" class="form-label fs-4">Vous pouvez choisir parmi les indices des élements du slider le premier élement que vous voulez voir afficher</label>
            <select name="selected_id" id="selected_id">
                @foreach ($sliders as $slider )
                   @if($slider->selected)
                    <option value="{{$slider->id}}" selected>{{$slider->id}}</option>
                    @else
                    <option value="{{$slider->id}}" >{{$slider->id}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="d-flex justify-content-center">

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>


        <div class="d-flex flex-wrap ">
            @foreach ($sliders as $slider )
                
    
                    <div class="card m-3" style="width: 18rem;">
                        <img src="{{asset('img/slider/'.$slider->image)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Titre: <span class="text-info">{{$slider->titre}}</span></h5>
                            <h5 class="card-title">SousTitre: <span class="text-info">{{$slider->soustitre}}</span></h5>
                            <p class="card-text">Span: <span class="text-info">{{$slider->span}}</span></p>
                            <p class="card-text">Texte: <span class="text-info">{{$slider->texte}}</span></p>
                            <p class="card-text">Btn: <span class="text-info">{{$slider->texte}}</span></p>
                            <form action="{{route('sliders.destroy', $slider->id)}}" method="POST" class="d-flex justify-content-center">
                                @method('DELETE')
                                @csrf
                                    <a href="{{route('sliders.edit',$slider->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                                    <button type="button" class="btn btn-danger my-2">DELETE</button>
                            </form>
                
                        </div>
                    </div> 
            @endforeach
          <div class="container d-flex justify-content-center">
          
              <a href="{{route('sliders.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
          </div>
        </div>
    </div>
@endsection