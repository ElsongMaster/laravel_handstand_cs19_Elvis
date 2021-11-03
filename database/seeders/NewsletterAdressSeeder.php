<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterAdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletteradresses')->insert([
            ["email"=>"parker12@example.com"],
            ["email"=>"kiarra.von@example.org"],
            ["email"=>"sstreich@example.net"],
            ["email"=>"imurphy@example.org"],
        ]);
    }
}
