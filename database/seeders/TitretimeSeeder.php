<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitretimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titretimes')->insert([
            [
                "nom"=>"8.00 AM"
            ],
            [
                "nom"=>"12.00 AM"
            ],
            [
                "nom"=>"3.00 PM"
            ],
            [
                "nom"=>"6.00 PM"
            ],
        ]);
    }
}
