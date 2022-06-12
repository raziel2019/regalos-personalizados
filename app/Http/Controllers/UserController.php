<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index');
    }
    public function update(Request $request, $id)
    {
        
        $user =  User::findOrFail($id);
        $user->fill($request->all());
        if($request->has('password')){
            $user->password = Hash::make($request->password);
        } 
        if($request->hasfile('foto')){
            $foto = $request->file('foto');
            $extension = $foto->getClientOriginalExtension();
            $nombre = time() . '.' . $extension;
            $foto->move('foto/' , $nombre);
            
            $user->foto=$nombre;
         
        }
        $user->save();
        return back()->with('Muy Bien','Sus datos han sido Editados Satisfactoriamente.');
    }
}
