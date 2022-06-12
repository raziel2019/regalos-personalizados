<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
Use Exception;
use Spatie\Permission\Models\Role;
use App\Models\Producto;
use App\Models\User;
use App\Models\EstatusVenta;
use App\Models\VentaProducto;
use App\Models\Smza;
use App\Models\DireccionVenta;
class VentaProductoClienteController extends Controller
{
    ////
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        $ventas = VentaProducto::with('users','productos','estatusventas','direccion_ventas')->where('usuarios_id', auth()->user()->id)->get(); 
        return view('pages.ventaProductoClientes.index', compact ('ventas') );
      
    }
    public function venta()
    {
        $productos = Producto::paginate(8);
        return view('pages.ventaProductoClientes.venta', compact('productos'));
    }
    public function create($id)
    {
        
        $producto = Producto::findOrFail($id);
        $smzas = Smza::with('costo_zonas')->get(); 
        return view('pages.ventaProductoClientes.create', compact('producto','smzas'));
    }
    
    public function store(Request $request)
    {
        try {
            // Validate the value...
            $producto = Producto::findOrFail($request->productos_id);
            if($producto){
                $rules = [
                    'smza_id' => 'required',
                    'mza' => 'required',
                    'lote' => 'required',
                    'calle' => 'required',
                    'colonia' => 'required',
                    'noExterior' => 'required',
                    'noInterior' => 'required',
                    'cpp'=> 'required',
                    'productos_id'  => 'required',
                    'frase_producto'  => 'required|max:20',
                ];
            
                $messages = [
                    'smza_id.required' => 'Es necesario seleccionar una Smza',
                    'mza.required' => 'Es necesario escribir una mza',
                    'lote.required' => 'Es necesario escribir el lote',
                    'calle.required' => 'Es necesario escribir la calle',
                    'colonia.required' => 'Es necesario escribir la colonia',
                    'noExterior.required' => 'Es necesario escribir el no Exterior',
                    'cpp.required' => 'Es necesario escribir el no Interior',
                    'productos_id.required' => 'Es necesario seleccionar un producto',
                    'frase_producto.required' => 'Es necesario seleccionar un producto',
                    'frase_producto.max' => 'El maximo de de caracteres en la frase es 20'
                ];

                $validator = Validator::make($request->all(),$rules, $messages);
        
                if ($validator->fails()) {
                    return redirect('tienda/'.$request->productos_id)
                                ->withErrors($validator)
                                ->withInput();
                }
                $producto = Producto::findOrFail($request->productos_id);
                if($producto){
                    DB::beginTransaction();
                    $direccionVenta = new DireccionVenta;
                    $direccionVenta->smza_id = $request->smza_id;
                    $direccionVenta->mza = $request->mza;
                    $direccionVenta->lote = $request->lote;
                    $direccionVenta->calle = $request->calle;
                    $direccionVenta->colonia = $request->colonia;
                    $direccionVenta->noExterior = $request->noExterior;
                    $direccionVenta->noInterior = $request->noInterior;
                    $direccionVenta->cpp = $request->cpp;
        
                    $direccionVenta->save();
        
                    $venta = new VentaProducto;
                    $venta->frase_producto = $request->frase_producto;
                    $venta->usuarios_id = auth()->user()->id;
                    $venta->productos_id = $request->productos_id;
                    $venta->estatusventa_id = 1;
                    $venta->direccion_ventas_id = $direccionVenta->id;
                    $venta->save();
                    DB::commit();
                }else{
                    return redirect('compras')->with('error', 'Seleccione un producto valido');
                }
                
            }
        } catch (Exception $e) {
            report($e);
            DB::rollBack();
            return redirect('compras')->with('error', $e);
        }
        // $Smza->save();
        return redirect('compras')->with('success', 'Ha comprado con exito');
    }
    
    public function detail($id)
    {
        $usuario = User::findOrFail(auth()->user()->id);
        if($usuario){

            $venta = VentaProducto::with('users','productos','estatusventas','direccion_ventas.smza.costo_zonas')->where('usuarios_id', auth()->user()->id)->findOrFail($id);
            return view('pages.ventaProductoClientes.detail', compact('venta'));
        }
        return redirect('compras')->with('error', 'Ha ocurrido un error');
    }
}
