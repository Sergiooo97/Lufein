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
        $this->call(RoleTableSeeder::class);    // Los usuarios necesitarán los roles previamente generados
    $this->call(UserTableSeeder::class);
     $this->call(model_has_permissionsTableSeeder::class);

    }
}
