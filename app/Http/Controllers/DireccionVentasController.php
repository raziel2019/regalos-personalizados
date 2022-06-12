<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DireccionVenta;
use App\Models\Smza;
class DireccionVentasController extends Controller
{
    //
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
        $direccionVentas = DireccionVenta::with('smza')->get(); 
        return view('pages.administrador.direccionVenta.index', compact('direccionVentas'));
    }
    public function create()
    {
        $smzas = Smza::all();
        return view('pages.administrador.direccionVenta.create', compact('smzas'));
    }
    public function store(Request $request)
    {
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
        // $Smza->save();
        return redirect()->route('direccionVentas');
    }

    public function edit($id)
    {
        $direccionVenta = DireccionVenta::findOrFail($id);
        $smzas = Smza::all();
        return view('pages.administrador.direccionVenta.edit', compact('direccionVenta','smzas'));
    }

    public function update(Request $request, $id)
    {
        $direccionVenta = DireccionVenta::findOrFail($id);
        $direccionVenta->fill($request->all());

        $direccionVenta->save();

        return redirect()->route('direccionVentas');
    }
    public function destroy($id)
    {
        $direccionVenta = DireccionVenta::findOrFail($id);
        $direccionVenta->delete();
        return redirect()->route('direccionVentas');

    }
}
