<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\Producto;
use App\Models\Materiale;
use App\Models\ProductosMateriale;

class ProductosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productos = Producto::paginate(5);
        return view('pages.administrador.productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $materiales = Materiale::all();
        return view("pages.administrador.productos.create", compact('materiales'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $productos = new Producto;
        $productos->nombreProducto = $request->nombre;
        $productos->descripcionProducto = $request->descripcion;
        $productos->precio = $request->precio;
        $productos->cantidad = $request->cantidad;
        if($request->hasfile('foto')){
            $foto = $request->file('foto');
            $extension = $foto->getClientOriginalExtension();
            $nombre = time() . '.' . $extension;
            $foto->move('imagen-producto' , $nombre);
            
            $productos->foto=$nombre;
        }
        $productos->save();

        for ($i=0;$i<count($request->material);$i++) 
        {
            $materiales = new ProductosMateriale;
            $materiales->productos_id = $productos->id;
      	    $materiales->materiales_id = $request->material[$i]; 
            $materiales->save();
      	}

        return redirect()->route('productos')->with('flash','Su producto ha sido guardado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productos = Producto::findOrFail($id);
        // $material = ProductosMateriale::where(
        //     'productos_id', $id
        // )->get();
        
        // foreach ($material as $orden=>$material){
        //     $materiales[] = Materiale::where('id', $material->materiales_id)->get();

        // }

        // // foreach ($materiales as $orden=>$material){
        // //     echo $material->nombreMaterial;
        // // }
        // echo $materiales[1][0]["id"];
        // // for ($i=0;$i<count($materiales);$i++) 
        // // {
            
      	// // }
        // // $materiales = Materiale::
        $materiales = Materiale::all();
        return view('pages.administrador.productos.edit', compact('productos', 'materiales'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $productos = Producto::findOrFail($id);
            if($request->hasfile('foto')){
                $foto = $request->file('foto');
                $extension = $foto->getClientOriginalExtension();
                $nombre = time() . '.' . $extension;
                $foto->move('imagen-producto' , $nombre);
                
                $productos->foto=$nombre;
            }
            $productos->save();
        $productos = Producto::where('id', $id)
            ->update([
                "nombreProducto" => $request->nombre,
                "descripcionProducto" => $request->descripcion,
                "cantidad" => $request->cantidad,
                "precio" => $request->precio
            ]);
        
        $materiales = ProductosMateriale::where('productos_id', $id)
            ->delete();

        for ($i=0;$i<count($request->material);$i++) 
        {
            $material = new ProductosMateriale;
            $material->productos_id = $id;
      	    $material->materiales_id = $request->material[$i]; 
            $material->save();
      	}

        return redirect()->route('productos')->with('flash','Su producto ha sido actualizado con Exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productos = Producto::findOrFail($id);
        $productos->delete();
        return redirect()->route('productos')->with('flash','Su producto ha sido eliminado con Exito.');
    }
}
