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
class SmzaController extends Controller
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
        $smzas = Smza::with('costo_zonas','municipios')->get(); 
        
        return view('pages.administrador.costoEnvio.smza.index', compact('smzas'));
    }
    public function create()
    {
        
        $costoZonas = CostoZona::all();
        return view('pages.administrador.costoEnvio.smza.create', compact('costoZonas'));
    }
    public function store(Request $request)
    {
        try {
            $rules = [
                'costo_zona_id' => 'required',
                'smza' => 'required',
            ];
        
            $messages = [
                'costo_zona_id.required' => 'Es necesario seleccionar una Zona',
                'smza.required' => 'Es necesario escribir la smza',
            ];

            $validator = Validator::make($request->all(),$rules, $messages);
        
            if ($validator->fails()) {
                return redirect('smza/create')
                            ->withErrors($validator)
                            ->withInput();
            }
            
            $costoZona = CostoZona::findOrFail($request->costo_zona_id);
            if($costoZona){
                DB::beginTransaction();
                $smza = new Smza;
                $smza->municipio_id = 5;
                $smza->costo_zona_id = $request->costo_zona_id;
                $smza->smza = $request->smza;
                $smza->save();
                DB::commit();
            }else{
                return redirect()->route('smza/create')->with('error', 'La zona seleccionada no es valida'); 
            }
            
            // $Smza->save();
        } catch (Exception $e) {
            report($e);
            DB::rollBack();
            return redirect()->route('smza')->with('error', 'Ha ocurrido un error');
        }
        return redirect()->route('smza')->with('success', 'Se ha guardado correctamente');
    }

    public function edit($id)
    {
        $smza = Smza::findOrFail($id);
        $costoZonas = CostoZona::all();
        return view('pages.administrador.costoEnvio.smza.edit', compact('smza','costoZonas'));
    }

    public function update(Request $request, $id)
    {
        $smza =  Smza::findOrFail($id);
        $smza->fill($request->all());

        $smza->save();

        return redirect()->route('smza');
    }
    public function destroy($id)
    {
        $smza = Smza::findOrFail($id);
        $smza->delete();
        return redirect()->route('smza');
    }
}
