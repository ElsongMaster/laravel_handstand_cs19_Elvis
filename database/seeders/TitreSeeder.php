<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([

            [
                "titre"=>"about our handstand",
                "description"=>null,
            ],
            [
                "titre"=>"our classe",
                "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"class schedule",
                "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],

            [
                "titre"=>"our trainer",
                "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"our gallery",
                "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"awesome event",
                "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"pricing table ",
                "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
            [
                "titre"=>"gift our",
                "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum issss has been the industry's standard dummy text ever since the 1500s, when an unknown lorem",
            ],
        ]);
    }
}
