<?php

namespace App\Providers;

use App\Models\Classe;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Classe' => 'App\Policies\ClassePolicy',
        'App\Models\User' => 'App\Policies\UserPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
         Gate::define('user_data', function($userConnected,$userDatas){
           return $userConnected->role->nom =='admin' || $userConnected->id === $userDatas->id;
         });
         Gate::define('user_create', function($userConnected){
           return $userConnected->role->nom =='admin';
         });
         Gate::define('coach_validate', function($userConnected){
           return $userConnected->role->nom =='coach_lead';
         });

         Gate::define('coach_create_classe', function($userConnected){
           return $userConnected->role->nom =='coach_lead' || $userConnected->role->nom =='coach' ;
         });
         Gate::define('coachLead_access', function($userConnected){
           return $userConnected->role->nom =='coach_lead' || $userConnected->role->nom =='admin' ;
         });
         Gate::define('coach_modifClasse', function(User $userConnected,Classe $classe ){
           return $userConnected->role->nom =='coach_lead' || $userConnected->role->nom =='coach' && $userConnected->id === $classe->coach->user->id ;
         });


    }
}
