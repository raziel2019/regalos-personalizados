<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CostoZona;
class CostoZonaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->insertCostoZona(5,'1',20.0);
        $this->insertCostoZona(5,'2',25.0);
        $this->insertCostoZona(5,'3',30.0);
        $this->insertCostoZona(5,'4',35.0);
        $this->insertCostoZona(5,'5',40.0);
        $this->insertCostoZona(5,'6',45.0);
        $this->insertCostoZona(5,'7',50.0);
        $this->insertCostoZona(5,'8',55.0);
        $this->insertCostoZona(5,'9',60.0);
        $this->insertCostoZona(5,'10',65.0);
        $this->insertCostoZona(5,'11',70.0);
        $this->insertCostoZona(5,'12',75.0);
        $this->insertCostoZona(5,'13',80.0);
        $this->insertCostoZona(5,'14',85.0);
        $this->insertCostoZona(5,'15',90.0);
        $this->insertCostoZona(5,'16',20.0);
        $this->insertCostoZona(5,'17',25.0);
        $this->insertCostoZona(5,'18',30.0);
        $this->insertCostoZona(5,'19',35.0);
        $this->insertCostoZona(5,'20',40.0);
        $this->insertCostoZona(5,'21',45.0);
        $this->insertCostoZona(5,'22',50.0);
        $this->insertCostoZona(5,'26',20.0);
        $this->insertCostoZona(5,'27',25.0);
        $this->insertCostoZona(5,'28',30.0);
        $this->insertCostoZona(5,'29',35.0);
        $this->insertCostoZona(5,'30',40.0);
        $this->insertCostoZona(5,'31',45.0);
        $this->insertCostoZona(5,'32',50.0);
        $this->insertCostoZona(5,'33',25.0);
        $this->insertCostoZona(5,'34',30.0);
        $this->insertCostoZona(5,'35',35.0);
        $this->insertCostoZona(5,'36',40.0);

        $this->insertCostoZona(5,'41',65.0);
        $this->insertCostoZona(5,'42',70.0);
        $this->insertCostoZona(5,'43',75.0);
        $this->insertCostoZona(5,'44',80.0);
        $this->insertCostoZona(5,'45',85.0);
        $this->insertCostoZona(5,'46',90.0);

        $this->insertCostoZona(5,'49',65.0);
        $this->insertCostoZona(5,'50',70.0);
        $this->insertCostoZona(5,'51',75.0);
        $this->insertCostoZona(5,'52',80.0);
        $this->insertCostoZona(5,'53',85.0);

    }
    private function insertCostoZona($municipio_id,$zona,$costo){
        $costoZona = new CostoZona();
        $costoZona->municipio_id = $municipio_id;
        $costoZona->zona = $zona;
        $costoZona->costo = $costo;
        $costoZona->save();
    }
}
