<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            [
                "nom"=>"facebook",
                "nomClass"=>"fab fa-facebook",
            ],
            [
                "nom"=>"twitter",
                "nomClass"=>"fab fa-twitter",
            ],
            [
                "nom"=>"dribbble",
                "nomClass"=>"fab fa-dribbble",
            ],
            [
                "nom"=>"dribbble",
                "nomClass"=>"fab fa-pinterest",
            ],
        ]);
    }
}
