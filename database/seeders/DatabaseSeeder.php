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
            UserAndRolesSeeder::class,
            NewsAndEventSeeder::class,
            BannerSeeder::class,
            DepartmentSeeder::class,
            JobPostSeeder::class,
        ]);
    }
}
