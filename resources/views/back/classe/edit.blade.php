



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link href="{{asset('vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
	<!-- Inclusion des feuilles de styles et script pour le composant Bootstrap-select -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

    <title>Document</title>
</head>
<body>
     <div class="container-fluid">

        <div class="container w-75  ">
        <x-app-layout >
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Dashboard') }}
                </h2>
            </x-slot>
            @include('back.partials.flash-message')
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

                    <select  id="mon-select"  class="selectpicker" multiple name="tags[]" id="tags" >
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

                <div class="mb-3">
                    <label for="semaine" class="form-label">Semaine</label>
                    <select name="semaine" id="semaine">
                        @foreach ($semaines as $semaine )
                            <option value="{{$semaine->id}}">{{$semaine->nom}}</option>
                        @endforeach

                    </select>
                    
                </div>
                <div class="mb-3">


                        <label for="heure">Heure par semaine:</label>
                        <select id="heure" name="heure">
                            @foreach ($semaines as $semaine )
                                <optgroup id="{{$semaine->nom}}" class="sem {{$semaine->nom}} {{$semaine->id === 1?'':'hidden-select'}}" label="{{$semaine->nom}}">
                                    @foreach ($semaine->heures as $heure )
                                    @if ($heure->id ===1)
                                        <option selected value="{{$heure->id}}">{{$heure->creneau}}</option>
                                    @else
                                        <option value="{{$heure->id}}">{{$heure->creneau}}</option>
                                    @endif
                                    @endforeach

                                </optgroup>
                            @endforeach

                        </select>

                </div>


                <div class="mb-3">


                        <label for="heure">Jours dispo pour l'heure choisi:</label>
                        <select id="heure" name="heure">
                            @foreach ($semaines as $semaine )
                                <optgroup class="sem {{$semaine->nom}} {{$semaine->id ===1?'':'hidden-select'}}"  label="{{$semaine->nom}}">
                                    @foreach ($semaine->heures as $heure )
                                        @if ($semaine->id === 1 && $heure->id<=4)   
                                            <optgroup class=" heure{{$heure->id}}  sem {{$semaine->nom}}"  label="{{$heure->creneau}}">
                                                @foreach ($heure->Jours as $jour )
                                                    @if($jour->classe_id == null && $jour->nom != '')
                                                        <option class="heure{{$heure->id}}  sem {{$semaine->nom}} "  value="{{$jour->id}}">{{$jour->nom}}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        @elseif ($semaine->id ===  2 && $heure->id>4 && $heure->id<=8)
                                                <optgroup class="heure{{$heure->id}} sem {{$semaine->nom}}"  label="{{$heure->creneau}}">
                                                @foreach ($heure->Jours as $jour )
                                                    @if($jour->classe_id == null && $jour->nom != '')
                                                        <option class="heure{{$heure->id}} sem {{$semaine->nom}} "  value="{{$jour->id}}">{{$jour->nom}}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        @elseif ($semaine->id ===  3 && $heure->id>8 && $heure->id<=12)
                                                <optgroup class="heure{{$heure->id}} sem {{$semaine->nom}}"  label="{{$heure->creneau}}">
                                                @foreach ($heure->Jours as $jour )
                                                    @if($jour->classe_id == null && $jour->nom != '')
                                                        <option class="heure{{$heure->id}}  sem {{$semaine->nom}} "  value="{{$jour->id}}">{{$jour->nom}}</option>
                                                    @endif
                                                @endforeach
                                            </optgroup>
                                        @endif
                                    @endforeach
                                </optgroup>
                            @endforeach
                        </select>
                </div>





                





                <div class="d-flex justify-content-center">

                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

                </form>

                </div>
            <script type="text/javascript">
                $(document).ready(function() {
                    $('#mon-select').selectpicker();
                });
            </script>
        </x-app-layout>
        @include("back.partials.navBar")
        </div>
    </div>

    <script type="text/javascript">
        
        var selectSemaine = document.getElementById('semaine');
        var selectHeure = document.getElementById('heure');
        // console.log(selectSemaine);
        selectSemaine.addEventListener('focusout',()=>{
            // console.log('onfocusout');
            var idName =  'semaine'+(selectSemaine.selectedIndex+1);

            // console.log(optgroupChosen)
            var tabOptgroup = Array.from(document.getElementsByClassName('sem'));
            
            
            // console.log(tabOptgroup)
            tabOptgroup.forEach(elt => {
                
                if(elt.classList.contains(idName)   && elt.classList.contains('hidden-select')){
                    elt.classList.remove('hidden-select')
                }else if(!elt.classList.contains(idName)   && !elt.classList.contains('hidden-select')){
                    elt.classList.add('hidden-select')

                }
            });

        })

        selectHeure.addEventListener('focusout',()=>{
            // console.log('onfocusout');
            var idNameHeure =  'heure'+(selectHeure.selectedIndex+1);
            console.log(idNameHeure);
            // console.log(optgroupChosen)
            var tabOptgroup = Array.from(document.getElementsByClassName('sem'));
            
            
            // console.log(tabOptgroup)
            tabOptgroup.forEach(elt => {
                
                if(elt.classList.contains(idNameHeure)  && elt.classList.contains('hidden-select')){
                    elt.classList.remove('hidden-select')
                }else if(!elt.classList.contains(idNameHeure)   && !elt.classList.contains('hidden-select')){
                    elt.classList.add('hidden-select')

                }
            });

        })



    </script>

    <style>
        .hidden-select{
            display:none;
        }
    </style>

   {{-- <script src="{{asset('js/app.js')}}"></script> --}}
   <script src="{{asset('js/tailwind.js')}}"></script>
</body>
</html>



