<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->img_url = 'd.png';
        $user->password = bcrypt('secret');
        $user->save();
    }
}
