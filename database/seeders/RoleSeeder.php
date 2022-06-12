<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use App\Models\User;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = ['Administrador', 'Empleado', 'Usuario'];

        foreach($roles as $role){
        	Role::create(['name' => $role]);
        }   
    }
}
