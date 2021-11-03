<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
            'name' => 'Els',
            'email' =>'els@gmail.com',
            'email_verified_at' => now(),
            'role_id'=>1,
            'package_id'=>null,
            'password' =>Hash::make('test'),

            ],

            [
            'name' => 'madmax',
            'email' =>'madmax@gmail.com',
            'email_verified_at' => now(),
            'role_id'=>2,
            'package_id'=>null,
            'password' =>Hash::make('test'),
            ],

            [
            'name' => 'Goku',
            'email' =>'goku@gmail.com',
            'email_verified_at' => now(),
            'role_id'=>3,
            'package_id'=>null,
            'password' =>Hash::make('test'),

            ],

            [
            'name' => 'picolo',
            'email' =>'picolo@gmail.com',
            'email_verified_at' => now(),
            'role_id'=>4,
            'package_id'=>null,
            'password' =>Hash::make('test'),

            ],

            [
            'name' => 'Sathi Bhuiyan',
            'email' =>'coach1@gmail.com',
            'email_verified_at' => now(),
            'role_id'=>3,
            'package_id'=>null,
            'password' =>Hash::make('test'),
            ],
            [
            'name' => 'John laisa do',
            'email' =>'Johnlaisa1@gmail.com',
            'email_verified_at' => now(),
            'role_id'=>3,
            'package_id'=>null,
            'password' =>Hash::make('test'),
            ],
            [
            'name' => 'John laisa do',
            'email' =>'Johnlaisa2@gmail.com',
            'email_verified_at' => now(),
            'role_id'=>2,
            'package_id'=>null,
            'password' =>Hash::make('test'),
            ],
            [
            'name' => 'John laisa do',
            'email' =>'Johnlaisa3@gmail.com',
            'email_verified_at' => now(),
            'role_id'=>3,
            'package_id'=>null,
            'password' =>Hash::make('test'),
            ],
            
            [
            'name' => 'Els le Beau gosse',
            'email' =>'elvis@outlook.com',
            'email_verified_at' => now(),
            'role_id'=>4,
            'package_id'=>3,
            'password' =>Hash::make('test'),
            ],
        ]);
    }
}
