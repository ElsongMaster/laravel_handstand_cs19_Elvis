<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->insert([

            [
                "image"=>"gal.jpg",
                "position"=>"left: 0%; top: 0px;",
            ],
            
            [
                "image"=>"gal2.jpg",
                "position"=>"left: 25%; top: 0px;",
            ],

            [
                "image"=>"gal3.jpg",
                "position"=>"left: 50%; top: 0px;",
            ],

            [
                "image"=>"gal4.jpg",
                "position"=>"left: 75%; top: 0px;",
            ],

            [
                "image"=>"gal5.jpg",
                "position"=>"left: 25%; top: 210px;",
            ],

            [
                "image"=>"gal6.jpg",
                "position"=>" left: 50%; top: 210px;",
            ],
        ]);
    }
}
