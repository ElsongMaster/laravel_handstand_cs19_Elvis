<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            [
                "titre"=>"Yoga celebration in Handstand",
                "description"=>"Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry'ssurvived",
                "date"=>date("2016-03-25"),
                "heure"=>"10AM - 12AM",
                "selected"=>true
            ],
        ]);
    }
}
