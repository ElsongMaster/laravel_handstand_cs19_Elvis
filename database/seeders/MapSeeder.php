<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maps')->insert([
            "street"=>"Boulevard Edmond machtens",
            "numero"=>"152",
            "zipcode"=>"1080",
            "city"=>"Bruxelles",
        ]);
    }
}
