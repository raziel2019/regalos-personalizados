<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Municipio;
class MunicipiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->insertMunicipio(1,23,'Cozumel');
        $this->insertMunicipio(2,23,'Felipe Carrillo Puerto');
        $this->insertMunicipio(3,23,'Isla Mujeres');
        $this->insertMunicipio(4,23,'Othón P. Blanco');
        $this->insertMunicipio(5,23,'Benito Juárez');
        $this->insertMunicipio(6,23,'José María Morelos');
        $this->insertMunicipio(7,23,'Lázaro cárdenas');
        $this->insertMunicipio(8,23,'Solidaridad');
        $this->insertMunicipio(9,23,'Tulum');
        $this->insertMunicipio(10,23,'Bacalar');
        $this->insertMunicipio(11,23,'Puerto Morelos');
    }

    private function insertMunicipio($estado_id,$numero,$nombre){
        $municipio = new Municipio();
        $municipio->estado_id = $estado_id;
        $municipio->numero = $numero;
        $municipio->nombre = $nombre;
        $municipio->save();
    }
}
