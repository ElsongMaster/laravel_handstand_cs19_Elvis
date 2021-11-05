<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('heures')->insert([
            
            [
                "creneau"=>"8.00Am-10.00Am",
                "semaine_id"=>1
            ],
            [
                "creneau"=>"10.00Am-12.00Am",
                "semaine_id"=>1
            ],
            [
                "creneau"=>"1.00Pm-3.00Pm",
                "semaine_id"=>1
            ],
            [
                "creneau"=>"3.00Pm-6.00Pm",
                "semaine_id"=>1
            ],
            [
                "creneau"=>"8.00Am-10.00Am",
                "semaine_id"=>2
            ],
            [
                "creneau"=>"10.00Am-12.00Am",
                "semaine_id"=>2
            ],
            [
                "creneau"=>"1.00Pm-3.00Pm",
                "semaine_id"=>2
            ],
            [
                "creneau"=>"3.00Pm-6.00Pm",
                "semaine_id"=>2
            ],
            [
                "creneau"=>"8.00Am-10.00Am",
                "semaine_id"=>3
            ],
            [
                "creneau"=>"10.00Am-12.00Am",
                "semaine_id"=>3
            ],
            [
                "creneau"=>"1.00Pm-3.00Pm",
                "semaine_id"=>3
            ],
            [
                "creneau"=>"3.00Pm-6.00Pm",
                "semaine_id"=>3
            ],
        ]);
    }
}
