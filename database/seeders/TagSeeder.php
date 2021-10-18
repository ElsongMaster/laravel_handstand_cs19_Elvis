<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            ["nom"=>"football"],
            ["nom"=>"plein air"],
            ["nom"=>"intérieur"],
            ["nom"=>" cours collectif"],
            ["nom"=>"cours en duo"],
            ["nom"=>"cours en solo"],
            ["nom"=>"cardio"],
            ["nom"=>"musculation"],
            ["nom"=>"méditation"],
        ]);
    }
}
