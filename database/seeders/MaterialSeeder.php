<?php

namespace Database\Seeders;
use App\Models\Materiale;
use Illuminate\Database\Seeder;

class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertMaterial(1,'Papel','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto1-material.jpg",8); 
        $this->insertMaterial(2,'Cartulinas','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto2-material.jpg",2); 
        $this->insertMaterial(3,'Caja grande','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto3-material.jpg",3); 
        $this->insertMaterial(4,'Caja mediana','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto4-material.jpg",4); 
        $this->insertMaterial(5,'Caja chica','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto5-material.jpg",6); 
        $this->insertMaterial(6,'Resistol','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto6-material.jpg",8); 
        $this->insertMaterial(7,'Globos','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto7-material.jpg",8); 
        $this->insertMaterial(8,'Moños','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto8-material.jpg",1); 
        $this->insertMaterial(9,'Silicon','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto9-material.jpg",4); 
        $this->insertMaterial(10,'Fomi','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',"foto10-material.jpg",6); 
        

    }
    private function insertMaterial($id,$nombreMaterial,$descripcionMaterial,$imagenMaterial,$cantidad ){
        $Materiales = new Materiale();
        $Materiales->id = $id;
        $Materiales->nombreMaterial = $nombreMaterial;
        $Materiales->descripcionMaterial = $descripcionMaterial;
        $Materiales->imagenMaterial = $imagenMaterial;
        $Materiales->cantidad = $cantidad;
        $Materiales->save();
    }
   }

