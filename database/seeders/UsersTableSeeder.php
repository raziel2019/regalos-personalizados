<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'nombre' => 'Dios',
            'email' => 'admin@rpc.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'nickname'=> 'Administrador',
            'foto'=> 'profile.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $empl = User::create([
            'nombre' => 'Rudy',
            'email' => 'empleado@rpc.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'nickname'=> 'Empleado',
            'foto'=> 'profile.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $usua = User::create([
            'nombre' => 'User',
            'email' => 'usuario@rpc.com',
            'email_verified_at' => now(),
            'password' => Hash::make('secret'),
            'nickname'=> 'Usuario',
            'foto'=> 'profile.png',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        $admin->assignRole('Administrador');
        $empl->assignRole('Empleado');
        $usua->assignRole('Usuario');
    }
}
