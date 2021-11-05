        <!-- Schedule Area Strat -->
        <section class="schedule-area pt-85 pb-90 text-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-xs-12">
                        <div class="section-title">
                               <h2>{{strtolower(htmlspecialchars_decode((str_replace(['(',')'],['<span style=color:#00aeff>','</span>'],$titreSchedule->titre))))}}</h2>
                               {{-- <h2>{{$titreSchedule->titre}}</h2> --}}
                            <p>{{$titreSchedule->description}}</p>
                        </div>
                    </div>
                </div>    
                @foreach ($semaines as $semaine )    
                <div class="row">
                    <div class="col-xs-12">                          
                        <div class="scehedule-table table-responsive text-center">
                                                               
                            <table>
                                <thead>
                                    <tr>
                                        <th>Time</th>
                                        <th>saturday</th>
                                        <th>sunday</th>
                                        <th>monday</th>
                                        <th>tuesday</th>
                                        <th>wednesday</th>
                                        <th>thursday</th>
                                        <th>friday</th>
                                    </tr>
                                </thead>
                                <tbody class="pt-30">


                                    @for ($j=0,$i=0; $i<$semaine->heures->count();$i++)
                                        <tr>
                                            @foreach ($semaine->heures[$i]->Jours as $jour )

                                                @if ($jour->nom ==="")
                                                    <td class="time">
                                                        <p>{{$titretimes[$j]->nom}}</p>
                                                        <span hidden>{{$j+=1}}</span>

                                                        @if ($j%4==0)
                                                           <span hidden>{{$j=0}}</span> 
                                                            
                                                        @endif
                                                    </td>

                                                @elseif ($jour->classe_id !=null)

                                                    @if ($semaine->heures[$i]->creneau === "8.00Am-10.00Am")

                                                        <td class="purple">
                                                        
                                                    @elseif($semaine->heures[$i]->creneau === "10.00Am-12.00Am")
                                                        <td class="olive">
                                                        
                                                    @elseif($semaine->heures[$i]->creneau === "1.00Pm-3.00Pm")
                                                    
                                                        <td class="blue">
                                                        
                                                    @elseif($semaine->heures[$i]->creneau === "3.00Pm-6.00Pm")
                                                        
                                                        <td class="pink">
                                                            

                                                    @endif

                                                        <h4>{{$jour->classe->nom}}</h4>
                                                        <p>{{$jour->classe->coach->user->name}}</p>
                                                        <p>{{$jour->classe->horaire}}</p>
                                                        </td>
                                                    
                                                @else
                                                <td></td>
                                                    
                                                @endif {{-- Fin If classe--}}

                                            @endforeach
                                            

                                        </tr>
                                        
                                    @endfor {{-- Boucle heure--}}
 

                                </tbody>
                            </table>
                        </div>
                        @endforeach {{-- Fin foreach semaine--}}
                    </div>
                    {{$semaines->links()}}
                </div>
            </div>
        </section>
        <!-- Schedule Area End -->