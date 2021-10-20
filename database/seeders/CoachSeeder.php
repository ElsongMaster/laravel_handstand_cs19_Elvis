<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('coaches')->insert([
            [
                "image"=>"trainer1.jpg",
                "user_id"=>6,
            ],
            [
                "image"=>"trainer2.jpg",
                "user_id"=>7,
            ],
            [
                "image"=>"trainer3.jpg",
                "user_id"=>8,
            ],
        ]);
    }
}
