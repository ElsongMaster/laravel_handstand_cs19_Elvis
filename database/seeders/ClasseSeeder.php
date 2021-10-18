<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('classes')->insert([
            [
                "image"=>"1.jpg",
                "nom"=>"yoga for climbers",
                "coach_id"=>1,
                "horaire"=>"10.00Am-05:00Pm",
                "categorie_id"=>3,
                "prioritaire"=>true,
                "date"=>date_create("2021-10-23"),
            ],
            [
                "image"=>"2.jpg",
                "nom"=>"yoga for climbers",
                "coach_id"=>1,
                "horaire"=>"10.00Am-05:00Pm",
                "categorie_id"=>2,
                "prioritaire"=>true,
                "date"=>date_create("2021-10-20"),
            ],
            [
                "image"=>"3.jpg",
                "nom"=>"yoga for climbers",
                "coach_id"=>1,
                "horaire"=>"10.00Am-05:00Pm",
                "categorie_id"=>2,
                "prioritaire"=>true,
                "date"=>date_create("2021-10-23"),
            ],
            
        ]);
    }
}
