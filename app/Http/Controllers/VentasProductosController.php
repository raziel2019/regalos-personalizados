<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use App\Models\Producto;
use App\Models\User;
use App\Models\EstatusVenta;
use App\Models\VentaProducto;
use App\Models\DireccionVenta;
use Illuminate\Support\Facades\DB;

class VentasProductosController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $venta = VentaProducto::all(); 
        $usuario = User::all();
        $productos = Producto::all();
        $estatus = EstatusVenta::all();
        $venta = VentaProducto::with('users','productos','estatusventas','direccion_ventas')->get(); 

        return view('pages.administrador.ventasProductos.index', compact ('venta') );
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $venta = VentaProducto::all(); 
        $usuario = User::all();
        $productos = Producto::all();
        $estatus = EstatusVenta::all();
        $direccionVentas = DireccionVenta::all();
        return view("pages.administrador.ventasProductos.create", compact('venta','usuario','productos','estatus','direccionVentas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new VentaProducto;
        $data->frase_producto = $request->ventas;
        $data->usuarios_id = $request->usuario;
        $data->productos_id = $request->producto;
        $data->estatusventa_id = $request->estatus;
        $data->direccion_ventas_id = $request->direccion_ventas_id;
        $data->save();
        return redirect()->route('ventas')->with('flash','Su venta ha sido guardado satisfactoriamente.');
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
        $venta = VentaProducto::findOrFail($id);
        return view('pages.administrador.ventasProductos.edit', compact('venta'));
     
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
        
        $data = VentaProducto::findOrFail($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->route('ventas')->with('flash','Su venta ha sido actualizado con Exito.');
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
        $data = VentaProducto::findOrFail($id);
        $data->delete();
        return redirect()->route('ventas')->with('flash','Su venta ha sido eliminado con Exito.');
    }
}
