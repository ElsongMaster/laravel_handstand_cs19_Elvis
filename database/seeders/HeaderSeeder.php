<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('headers')->insert([
            "logo"=>"logo.png",
            "li1"=>"Home",
            "li2"=>"About us",
            "li3"=>"classes",
            "li4"=>"gallery",
            "li5"=>"Contact",
        ]);
    }
}
