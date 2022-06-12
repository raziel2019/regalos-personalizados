<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = User::paginate(5); 
        return view('pages.administrador.usuarios.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view("pages.administrador.usuarios.create", compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $usuarios = User::create($request->all());
        if($request->has('password')){
            $usuarios->password = Hash::make($request->password);
        } 
        if($request->hasfile('foto')){
            $foto = $request->file('foto');
            $extension = $foto->getClientOriginalExtension();
            $nombre = time() . '.' . $extension;
            $foto->move('foto/' , $nombre);
            
            $usuarios->foto=$nombre;
        }
        $usuarios->save();
        $usuarios->assignRole($request->get('rol'));
        return redirect()->route('usuarios')->with('flash','Su usuario ha sido guardado satisfactoriamente.');
    }

    public function registro(Request $request)
    {
        $nickname ='Usuario';
        if($request['nickname']){
            $nickname =$request['nickname'];
        }
        $usuarios =  User::create([
            'nombre' => $request['nombre'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'nickname' => $nickname,
            'foto' => $request['foto'],
            'role' =>$nickname,
        ]);
        if($request->has('password')){
            $usuarios->password = Hash::make($request->password);
        } 
        if($request->hasfile('foto')){
            $foto = $request->file('foto');
            $extension = $foto->getClientOriginalExtension();
            $nombre = time() . '.' . $extension;
            $foto->move('foto/' , $nombre);
            
            $usuarios->foto=$nombre;
        }
        $usuarios->save();
        $usuarios->assignRole($nickname);
        return redirect()->route('Tienda')->with('flash','Su usuario ha sido guardado satisfactoriamente.');
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
        $usuarios = User::findOrFail($id);
        $roles = Role::all();
        return view('pages.administrador.usuarios.edit', compact('usuarios','roles'));
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
        $usuarios =  User::findOrFail($id);
        $usuarios->fill($request->all());
        if($request->has('password')){
            $usuarios->password = Hash::make($request->password);
        } 
        if($request->hasfile('foto')){
            $foto = $request->file('foto');
            $extension = $foto->getClientOriginalExtension();
            $nombre = time() . '.' . $extension;
            $foto->move('foto/' , $nombre);
            
            $usuarios->foto=$nombre;
         
        }
        $usuarios->save();
        
        $usuarios->assignRole($request->get('rol'));
        return redirect()->route('usuarios')->with('flash','Su usuario ha sido actualizado con Exito.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuarios = User::findOrFail($id);
        $usuarios->delete();
        return redirect()->route('usuarios')->with('flash','Su usuario ha sido eliminado con Exito.');
    }
}
