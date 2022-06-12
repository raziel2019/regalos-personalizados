<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstatusVenta;
class EstatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertEstatus(1,'Pendiente');
        $this->insertEstatus(2,'Proceso ');
        $this->insertEstatus(3,'Vendido ');
    }
    private function insertEstatus($id,$estatus ){
        $Estatus = new EstatusVenta();
        $Estatus->id = $id;
        $Estatus->estatus = $estatus;
        $Estatus->save();
    }
}
