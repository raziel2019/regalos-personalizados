<?php

namespace App\Http\Controllers\administrador\costoEnvio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
Use Exception;
use App\Models\Estado;
use App\Models\Municipio;
use App\Models\CostoZona;
use App\Models\Smza;
class CostoZonaController extends Controller
{
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
        $costoZonas = CostoZona::all(); 
        return view('pages.administrador.costoEnvio.costoZona.index', compact('costoZonas'));
    }
    public function create()
    {
        $municipios = Municipio::all();
        return view('pages.administrador.costoEnvio.costoZona.create', compact('municipios'));
    }
    public function store(Request $request)
    {
        try {
            $rules = [
                'municipio_id' => 'required',
                'zona' => 'required',
                'costo' => 'required',
            ];
        
            $messages = [
                'municipio_id.required' => 'Es necesario seleccionar un Municipio',
                'zona.required' => 'Es necesario escribir una Zona',
                'costo.required' => 'Es necesario escribir el costo',
            ];
            $validator = Validator::make($request->all(),$rules, $messages);
        
            if ($validator->fails()) {
                return redirect('costoZona/create')
                            ->withErrors($validator)
                            ->withInput();
            }
            DB::beginTransaction();
            $costoZona = new CostoZona;
            $costoZona->municipio_id = $request->municipio_id;
            $costoZona->zona = $request->zona;
            $costoZona->costo = $request->costo;
            $costoZona->save();
            DB::commit();
        } catch (Exception $e) {
            report($e);
            DB::rollBack();
            return redirect()->route('costoZona')->with('error', 'Ha ocurrido un error');
        }
        
        // $costoSmza->save();
        return redirect()->route('costoZona')->with('success', 'Se ha guardado correctamente');

    }

    public function edit($id)
    {
        $costoZona = CostoZona::findOrFail($id);
        $municipios = Municipio::all();
        return view('pages.administrador.costoEnvio.costoZona.edit', compact('costoZona','municipios'));
    }

    public function update(Request $request, $id)
    {
        $costoZona =  CostoZona::findOrFail($id);
        $costoZona->fill($request->all());

        $costoZona->save();

        return redirect()->route('costoZona');
    }

    //se implementará borrado lógico
    // public function destroy($id)
    // {
    //     $costoZona = CostoZona::findOrFail($id);
    //     $costoZona->delete();
    //     return redirect()->route('costoZona');
    // }
}
