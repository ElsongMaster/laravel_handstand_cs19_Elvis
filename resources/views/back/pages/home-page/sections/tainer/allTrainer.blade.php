@extends('back.template.main')










@section('backContent')
    <div class="container">

        <h2 class="text-center fs-2">Toute les données de coach</h2>



        <div class="d-flex flex-wrap ">
            {{-- {{dd($coaches->count())}} --}}
            @for ($i=0;$i<$coaches->count();$i++)
                @if ($i === 1)
                <div class="card m-3" style="width: 18rem;">
                    <img src="{{asset('img/trainer/'.$coachLead->image)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Nom: <span class="text-info">{{$coachLead->user->name}}</span></h5>
                            {{-- {{dd($coach->linksocials)}} --}}
                            <h5 class="card-title">
                                <div class=" d-flex justify-content-between w-75 my-3" >
                                @foreach ($coachLead->linksocials as $link )
                                    {{-- {{dd($link->icon->nomClass)}} --}}
                                    <a class="btn btn-info text-light" href="{{$link->lien}}"><i class="{{$link->icon->nomClass}}"></i></a> 
                                @endforeach
                                </div> 
                            </h5>                          
                        <form action="{{route('coaches.destroy', $coachLead->id)}}" method="POST" class="d-flex justify-content-center">
                            @method('DELETE')
                            @csrf
                                <a href="{{route('coaches.edit',$coachLead->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                                <button type="button" class="btn btn-danger my-2">DELETE</button>
                        </form>
            
                    </div>
                </div>   
            @else
                
            <div class="card m-3" style="width: 18rem;">
                <img src="{{asset('img/trainer/'.$coachesWithoutLead[$i-1]->image)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Nom: <span class="text-info">{{$coachesWithoutLead[$i-1]->user->name}}</span></h5>
                        {{-- {{dd($coach->linksocials)}} --}}
                        <h5 class="card-title">
                            <div class=" d-flex justify-content-between w-75 my-3" >
                             @foreach ($coachesWithoutLead[$i-1]->linksocials as $link )
                                 {{-- {{dd($link->icon->nomClass)}} --}}
                                <a class="btn btn-info text-light" href="{{$link->lien}}"><i class="{{$link->icon->nomClass}}"></i></a> 
                             @endforeach
                            </div> 
                        </h5>                          
                    <form action="{{route('coaches.destroy', $coachesWithoutLead[$i-1]->id)}}" method="POST" class="d-flex justify-content-center">
                        @method('DELETE')
                        @csrf
                            <a href="{{route('coaches.edit',$coachesWithoutLead[$i-1]->id)}}" class="btn btn-warning my-2 mr-2">EDIT</a>
                            <button type="button" class="btn btn-danger my-2">DELETE</button>
                    </form>
        
                </div>
            </div> 
            @endif
            @endfor
                
    
          <div class="container d-flex justify-content-center">
          
              <a href="{{route('coaches.create')}}" class="btn btn-warning p-4  my-3 rounded mx-auto"><i class="fas fa-plus text-secondary fs-2"></i></a>
          </div>
        </div>
    </div>
@endsection