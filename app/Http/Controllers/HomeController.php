<?php

namespace App\Http\Controllers;
use App\Models\Materiale;
use App\Models\User;
use App\Models\Producto;
use App\Models\VentaProducto;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $usuario = User::paginate(3);
        $productos = Producto::paginate(3);
        $materiales = Materiale::all();
        $venta = VentaProducto::all(); 
        $totalVentas = VentaProducto::sum('id');

        return view('dashboard', compact ('totalVentas','usuario','productos','materiales','venta') );
    }
}
