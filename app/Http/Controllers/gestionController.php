<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestion;

class gestionController extends Controller
{
    /**
     * Funcion index para retornar la vista de formulario
     */
    public function index()
    {
        return view ('gestion.formulario');
    }
    /**
     * Creacion de usuario 
     */
    public function store(Request $request)
    {
        
        $gestion= new Gestion();
        $gestion->nombre = $request->nombre;
        $gestion->correo= $request->correo;
        $gestion->contra= $request->contra;
        $gestion->rol= $request->rol;
        $gestion->save();
        //retorna a la vista lista 
        return redirect()->route('lista');
    }
    /**
     * Editar informacion del usuario
     */
    public function edit(string $id)
    {
        $gestion = Gestion::find($id);
        return view('gestion.editar',compact('gestion'));
        return $gestion;
    }
    /**
     * Actualizar la informacion del usuario
     */
    public function actualizar(Request $request, string $id)
    {
        $gestion = Gestion::find($id);
        $gestion->nombre = $request->nombre;
        $gestion->correo= $request->correo;
        $gestion->contra= $request->contra;
        $gestion->rol= $request->rol;
        $gestion->update();
        return redirect()->route('lista');
    }
    /**
     * Mostrar todos los usuarios existentes
     */
    public function lista()
    {
         $gestions= Gestion::All();
        return view ('gestion.lista',['gestions' => $gestions]);
    }
    /**
     * Eliminar usuario
     */
    public function eliminar($id)
    {
       $gestion=Gestion::find($id);
       $gestion->delete();
       return redirect()->route('lista');
    }
}
