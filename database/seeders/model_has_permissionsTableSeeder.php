<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\model_has_roles;

class model_has_permissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new model_has_roles();
        $role->role_id = '1';
        $role->model_type = 'App\Models\User';
        $role->model_id = '1';
        
        $role->save();  
    }
}
