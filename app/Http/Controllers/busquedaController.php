<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gestion;

class busquedaController extends Controller
{
   
        //
        public function buscar(Request $request)
        {
            $query = $request->input('query');
            $resultados = Gestion::where('nombre', 'like', '%'.$query.'%')->get();
            return view('gestion.lista', ['resultados' => $resultados]);
        }
    
}
