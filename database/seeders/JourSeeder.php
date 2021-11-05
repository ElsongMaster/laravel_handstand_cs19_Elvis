<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class JourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = Faker::create();
        DB::table('jours')->insert([
            
            [
                "nom"=>"",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),
                "heure_id"=>1,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),
                "heure_id"=>1,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,
                "heure_id"=>1,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>1,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),
                "heure_id"=>1,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,
                "heure_id"=>1,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),

                "heure_id"=>1,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,
                "heure_id"=>1,
            ],
            
            [
                "nom"=>"",
                "classe_id"=>null,
                "heure_id"=>2,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,
                "heure_id"=>2,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,
                "heure_id"=>2,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),
                "heure_id"=>2,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,
                "heure_id"=>2,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),

                "heure_id"=>2,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,
                "heure_id"=>2,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,
                "heure_id"=>2,
            ],
            
            [
                "nom"=>"",
                "classe_id"=>null,
                "heure_id"=>3,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,
                "heure_id"=>3,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),

                "heure_id"=>3,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>3,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,
                "heure_id"=>3,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),

                "heure_id"=>3,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,
                "heure_id"=>3,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),

                "heure_id"=>3,
            ],
            
            [
                "nom"=>"",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),

                "heure_id"=>4,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),

                "heure_id"=>4,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,
                "heure_id"=>4,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>4,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),

                "heure_id"=>4,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,
                "heure_id"=>4,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,
                "heure_id"=>4,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>$faker->numberBetween(1,Classe::all()->count()),
                "heure_id"=>4,
            ],


            //partie factoring
            //Semaine2
            
            [
                "nom"=>"",
                "classe_id"=>null,
                "heure_id"=>5,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,
                "heure_id"=>5,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,
                "heure_id"=>5,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>5,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,
                "heure_id"=>5,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,
                "heure_id"=>5,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,

                "heure_id"=>5,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,
                "heure_id"=>5,
            ],
            
            [
                "nom"=>"",
                "classe_id"=>null,
                "heure_id"=>6,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,
                "heure_id"=>6,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,
                "heure_id"=>6,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>6,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,
                "heure_id"=>6,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,

                "heure_id"=>6,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,
                "heure_id"=>6,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,
                "heure_id"=>6,
            ],
            
            [
                "nom"=>"",
                "classe_id"=>null,
                "heure_id"=>7,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,
                "heure_id"=>7,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,

                "heure_id"=>7,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>7,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,
                "heure_id"=>7,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,

                "heure_id"=>7,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,
                "heure_id"=>7,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,

                "heure_id"=>7,
            ],
            
            [
                "nom"=>"",
                "classe_id"=>null,

                "heure_id"=>8,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,

                "heure_id"=>8,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,
                "heure_id"=>8,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>8,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,

                "heure_id"=>8,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,
                "heure_id"=>8,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,
                "heure_id"=>8,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,
                "heure_id"=>8,
            ],

            //semaine3
            
            [
                "nom"=>"",
                "classe_id"=>null,
                "heure_id"=>9,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,
                "heure_id"=>9,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,
                "heure_id"=>9,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>9,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,
                "heure_id"=>9,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,
                "heure_id"=>9,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,

                "heure_id"=>9,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,
                "heure_id"=>9,
            ],
            
            [
                "nom"=>"",
                "classe_id"=>null,
                "heure_id"=>10,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,
                "heure_id"=>10,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,
                "heure_id"=>10,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>10,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,
                "heure_id"=>10,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,

                "heure_id"=>10,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,
                "heure_id"=>10,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,
                "heure_id"=>10,
            ],
            
            [
                "nom"=>"",
                "classe_id"=>null,
                "heure_id"=>11,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,
                "heure_id"=>11,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,

                "heure_id"=>11,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>11,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,
                "heure_id"=>11,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,

                "heure_id"=>11,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,
                "heure_id"=>11,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,

                "heure_id"=>11,
            ],
            
            [
                "nom"=>"",
                "classe_id"=>null,

                "heure_id"=>12,
            ],
            [
                "nom"=>"saturday",
                "classe_id"=>null,

                "heure_id"=>12,
            ],
            [
                "nom"=>"sunday",
                "classe_id"=>null,
                "heure_id"=>12,
            ],
            [
                "nom"=>"monday",
                "classe_id"=>null,
                "heure_id"=>12,
            ],
            [
                "nom"=>"tuesday",
                "classe_id"=>null,

                "heure_id"=>12,
            ],
            [
                "nom"=>"woensday",
                "classe_id"=>null,
                "heure_id"=>12,
            ],
            [
                "nom"=>"thursday",
                "classe_id"=>null,
                "heure_id"=>12,
            ],
            [
                "nom"=>"friday",
                "classe_id"=>null,
                "heure_id"=>12,
            ],


         

        ]);
    }
}
