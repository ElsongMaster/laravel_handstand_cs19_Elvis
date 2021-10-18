<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            [
                "nom"=>"silver package",
                "prix"=>"$30",
                "frequence"=>"month",
                "li1"=>"Free T-Shirt & swags",
                "li2"=>"Free of all message treatments",
                "li3"=>"Access Clup Facilites",
                "li4"=>"Out Door activites",
                "btn"=>"get started",
            ],
            [
                "nom"=>"gold package",
                "prix"=>"$50",
                "frequence"=>"month",
                "li1"=>"Free T-Shirt & swags",
                "li2"=>"Free of all message treatments",
                "li3"=>"Access Clup Facilites",
                "li4"=>"Out Door activites",
                "btn"=>"get started",
            ],
            [
                "nom"=>"silver package",
                "prix"=>"$70",
                "frequence"=>"month",
                "li1"=>"Free T-Shirt & swags",
                "li2"=>"Free of all message treatments",
                "li3"=>"Access Clup Facilites",
                "li4"=>"Out Door activites",
                "btn"=>"get started",
            ],
           
        ]);
    }
}
