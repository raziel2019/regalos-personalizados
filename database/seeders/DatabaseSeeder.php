<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
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
        $this->call([RoleSeeder::class]);
        $this->call([UsersTableSeeder::class]);
        $this->call([EstadosTableSeeder::class]);
        $this->call([MunicipiosTableSeeder::class]);
        $this->call([CostoZonaTableSeeder::class]);
        $this->call([SmzaTableSeeder::class]);
        $this->call([EstatusSeeder::class]);
        $this->call([ProductoSeeder::class]);
        $this->call([MaterialSeeder::class]);
        $this->call([ProductosMaterialSeeder::class]);
    }
}
