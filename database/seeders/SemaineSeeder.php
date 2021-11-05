<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemaineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semaines')->insert([
            ["nom"=>"semaine1"],
            ["nom"=>"semaine2"],
            ["nom"=>"semaine3"],
        ]);
    }
}
