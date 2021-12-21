<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->guard_name = 'web';
        $role->save();  
        $role = new Role();
        $role->name = 'cliente';
        $role->guard_name = 'web';
        $role->save();        
    }
}
