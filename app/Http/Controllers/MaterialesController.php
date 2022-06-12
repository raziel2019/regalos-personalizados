<?php

namespace App\Http\Controllers;

use App\Models\Materiale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class MaterialesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales = Materiale::paginate(5); 
        return view('pages.administrador.materiales.index', compact('materiales'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.administrador.materiales.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $materiales = new Materiale;
        $materiales->nombreMaterial = $request->nombre;
        $materiales->descripcionMaterial = $request->descripcion;

        if($request->hasfile('imagen')){
            $foto = $request->file('imagen');
            $extension = $foto->getClientOriginalExtension();
            $nombre = time() . '.' . $extension;
            $foto->move('foto/' , $nombre);
            
            $materiales->imagenMaterial=$nombre;
        }
        $materiales->cantidad = $request->cantidad;
        $materiales->save();

        return redirect()->route('materiales')->with('flash','Su material ha sido guardado satisfactoriamente.');
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
        $materiales = Materiale::findOrFail($id);
        return view('pages.administrador.materiales.edit', compact('materiales'));
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
        if($request->hasfile('foto')){
            $foto = $request->file('foto');
            $extension = $foto->getClientOriginalExtension();
            $nombre = time() . '.' . $extension;
            $foto->move('foto/' , $nombre);         
        }
        
        $Materiales = Materiale::where('id', $id)
            ->update([
                "nombreMaterial" => $request->nombre,
                "descripcionMaterial" => $request->descripcion,
                "cantidad" => $request->cantidad,
                "imagenMaterial" => $nombre
            ]);

        return redirect()->route('materiales')->with('flash','Su material ha sido actualizado con Exito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $materiales = Materiale::findOrFail($id);
        $materiales->delete();
        return redirect()->route('materiales')->with('flash','Su material ha sido eliminado con Exito.');
    }
}
