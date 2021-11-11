@extends('back.template.mainCustomizelink')







@section('backContent2')
<div class="container-fluid  d-flex flex-column justify-content-center align-items-center" style="height:fit-content;">

    <div class="container p-2 my-0">
    
                
      <!-- Footer Area Start -->
      @foreach ($footerdatas as $footerdata )
        <footer class="footer-area bg-gray">
                
            
            <div class="footer-widget-area bg-3 pt-98 pb-90 fix">
                <div class="container">
                    <div class="row">  
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-footer-widget">
                                <a href="{{route('home')}}"><img src="{{asset('img/logo/'.$footerdata->logo)}}" alt="handstand"></a>
                                <p>{{$footerdata->description}} </p>
                                <ul>
                                    <li><i class="zmdi zmdi-email"></i> {{$footerdata->email}}</li>
                                    <li><i class="zmdi zmdi-phone"></i> {{$footerdata->tel}}</li>
                                    <li><i class="zmdi zmdi-home"></i> {{$footerdata->map->street}} {{$footerdata->map->numero}}, {{$footerdata->map->zipcode}} {{$footerdata->map->city}}</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-footer-widget">
                                <h3>Recent classe</h3>
                                @foreach ($classes as $classe )
                                    
                                <div class="single-twitt mb-10">
                                    <div class="twitt-icon" >
                                     <a href="{{asset('class')}}"><img style="height: 65px;width:65px;" src="{{asset('img/class/'.$classe->image)}}" alt="class"></a>

                                    </div>
                                    <div class="twitt-content">
                                        <h3><a href="{{route('class')}}">{{$classe->nom}}</a></h3>
                                        <ul>
                                            <li class="p-0 m-0"><i class="zmdi zmdi-face"></i>{{$classe->coach->user->name}}</li>
                                            <li><i class="zmdi zmdi-alarm"></i>{{$classe->jour->heure->creneau}}</li>
                                        </ul>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="col-md-4 hidden-sm col-xs-12">
                            <div class="single-footer-widget">
                                <h3>{{$footerdata->titre2}}</h3>

                                <form action="{{route('storeContact')}}" method="POST">
                                @csrf
                                <div class="row">
                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Name" name="name">
                                        </div>

                                        <div class="col-sm-6">
                                            <input type="text" placeholder="Email" name="email">
                                        </div>
                                        <div class="col-sm-12">
                                            <textarea cols="30" rows="7" name="subject" placeholder="subject"></textarea>
                                            <button type="submit">submit</button>
                                        </div>
                                </div>

                                </form>
                            </div>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-text-area fix bg-coffee ptb-18">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer-text text-center">
                                <span>Copyright &copy; <a href="#">Hastech</a> 2017. All Rights Reserved.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End -->
   
    </div>
    <div class="d-flex justify-content-center my-0 py-0">
            <form action="{{route('footerdatas.destroy', $footerdata->id)}}" method="POST" class="d-flex justify-content-center">
                @method('DELETE')
                @csrf
                    <a href="{{route('footerdatas.edit',$footerdata->id)}}" class="btn btn-warning my-2 mr-2"><i class="fas fa-edit"></i></a>
                    <button type="submit" class="btn btn-danger my-2"><i class="fas fa-trash-alt "></i></button>
              </form>
    </div>
 @endforeach
</div>


@endsection