<?php

namespace Database\Seeders;
use App\Models\Producto;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->insertProducto(1,'Producto 1','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',100,1,"foto1.jpg"); 
        $this->insertProducto(2,'Producto 2','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',120,2,"foto2.jpg"); 
        $this->insertProducto(3,'Producto 3','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',130,4,"foto3.jpg"); 
        $this->insertProducto(4,'Producto 4','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',190,8,"foto4.jpg"); 
        $this->insertProducto(5,'Producto 5','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',122,2,"foto5.jpg"); 
        $this->insertProducto(6,'Producto 6','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',110,20,"foto6.jpg"); 
        $this->insertProducto(7,'Producto 7','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',140,8,"foto7.jpg"); 
        $this->insertProducto(8,'Producto 8','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',130,6,"foto8.jpg"); 
        $this->insertProducto(9,'Producto 9','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',200,1,"foto9.jpg"); 
        $this->insertProducto(10,'Producto 10','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',320,1,"foto10.jpg"); 
        $this->insertProducto(11,'Producto 11','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',410,2,"foto11.jpg"); 
        $this->insertProducto(12,'Producto 12','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',210,3,"foto12.jpg"); 
        $this->insertProducto(13,'Producto 13','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',300,2,"foto13.jpg"); 
        $this->insertProducto(14,'Producto 14','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',198,7,"foto14.jpg"); 
        $this->insertProducto(15,'Producto 15','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',110,5,"foto15.jpg"); 
        $this->insertProducto(16,'Producto 16','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',210,3,"foto16.jpg"); 
        $this->insertProducto(17,'Producto 17','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',170,2,"foto17.jpg"); 
        $this->insertProducto(18,'Producto 18','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',130,8,"foto18.jpg"); 
        $this->insertProducto(19,'Producto 19','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',110,2,"foto19.jpg"); 
        $this->insertProducto(20,'Producto 20','Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure doloremque aut reprehenderit unde soluta nesciunt architecto ipsam tempore quod atque fuga asperiores sit minima quos labore quia, totam id inventore?',100,5,"foto20.jpg"); 

    }
    private function insertProducto($id,$nombreProducto,$descripcionProducto,$precio,$cantidad,$foto ){
        $Productos = new Producto();
        $Productos->id = $id;
        $Productos->nombreProducto = $nombreProducto;
        $Productos->descripcionProducto = $descripcionProducto;
        $Productos->precio = $precio;
        $Productos->cantidad = $cantidad;
        $Productos->foto = $foto;
        $Productos->save();
    }
}
