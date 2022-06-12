<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Estado;
class EstadosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->insertEstado(1,'Aguascalientes');
        $this->insertEstado(2,'Baja California ');
        $this->insertEstado(3,'Baja California Sur ');
        $this->insertEstado(4,'Campeche');
        $this->insertEstado(5,'Coahuila de Zaragoza');
        $this->insertEstado(6,'Colima');
        $this->insertEstado(7,'Chiapas');
        $this->insertEstado(8,'Chihuahua');
        $this->insertEstado(9,'Ciudad de México');
        $this->insertEstado(10,'Durango');
        $this->insertEstado(11,'Guanajuato');
        $this->insertEstado(12,'Guerrero');
        $this->insertEstado(13,'Hidalgo');
        $this->insertEstado(14,'Jalisco');
        $this->insertEstado(15,'México');
        $this->insertEstado(16,'Michoacán de Ocampo');
        $this->insertEstado(17,'Morelos');
        $this->insertEstado(18,'Nayarit');
        $this->insertEstado(19,'Nuevo León');
        $this->insertEstado(20,'Oaxaca');
        $this->insertEstado(21,'Puebla');
        $this->insertEstado(22,'Querétaro');
        $this->insertEstado(23,'Quintana Roo');
        $this->insertEstado(24,'San Luis Potosí');
        $this->insertEstado(25,'Sinaloa');
        $this->insertEstado(26,'Sonora');
        $this->insertEstado(27,'Tabasco');
        $this->insertEstado(28,'Tamaulipas');
        $this->insertEstado(29,'Tlaxcala');
        $this->insertEstado(30,'Veracruz de Ignacio de la Llave');
        $this->insertEstado(31,'Yucatán');
        $this->insertEstado(32,'Zacatecas');
        
    }
    private function insertEstado($numero,$nombre){
        $estado = new Estado();
        $estado->numero = $numero;
        $estado->nombre = $nombre;
        $estado->save();
    }
}
