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
                "nomClass"=>"fa fa-facebook",
            ],
            [
                "nom"=>"twitter",
                "nomClass"=>"fa fa-twitter",
            ],
            [
                "nom"=>"dribbble",
                "nomClass"=>"fa fa-dribbble",
            ],
            [
                "nom"=>"dribbble",
                "nomClass"=>"fa fa-pinterest",
            ],
        ]);
    }
}
