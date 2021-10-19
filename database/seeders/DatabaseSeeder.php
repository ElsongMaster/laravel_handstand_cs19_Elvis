<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
            TitreSeeder::class,
            HeaderSeeder::class,
            SliderSeeder::class,
            AboutSeeder::class,
            RoleSeeder::class,
            PackageSeeder::class,
            CategorieSeeder::class,
            UserSeeder::class,
            CoachSeeder::class,
            ClasseSeeder::class,
            TagSeeder::class,
            ClasseTagSeeder::class,
            ClasseUserSeeder::class,
            IconSeeder::class,
            LinksocialSeeder::class,

        ]);
        \App\Models\User::factory(35)->create();
        \App\Models\ClasseUser::factory(15)->create();
        \App\Models\ClasseUserYellow::factory(10)->create();
        \App\Models\ClasseUserGreen::factory(6)->create();


    }
}
