<?php

namespace Database\Seeders;
use App\Models\ProductosMateriale;
use Illuminate\Database\Seeder;

class ProductosMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertProductosMaterial(1,1,1); 
        $this->insertProductosMaterial(2,2,2); 
        $this->insertProductosMaterial(3,3,3); 
        $this->insertProductosMaterial(4,4,4); 
        $this->insertProductosMaterial(5,5,5); 
        $this->insertProductosMaterial(6,6,6); 
        $this->insertProductosMaterial(7,7,7); 
        $this->insertProductosMaterial(8,8,8); 
        $this->insertProductosMaterial(9,9,9); 
        $this->insertProductosMaterial(10,10,10);         

    }
    private function insertProductosMaterial($id,$productos_id,$materiales_id ){
        $ProductosMaterial = new ProductosMateriale();
        $ProductosMaterial->id = $id;
        $ProductosMaterial->productos_id = $productos_id;
        $ProductosMaterial->materiales_id = $materiales_id;
        $ProductosMaterial->save();
    }
}
