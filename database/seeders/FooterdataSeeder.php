<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterdataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footerdatas')->insert([
            "logo"=>"logo.png",
            "titre1"=>"Recent classe",
            "titre2"=>"get in touch",
            "description"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur a convallis nulla. Ut",
            "email"=>"username@gmail.com",
            "tel"=>"(+660 256 24857)",
            "map_id"=>1,
            "copyright"=>json_encode(['Hastech','2017. All Rights Reserved.'])
        ]);
    }
}
