<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarea;

class TareaController extends Controller
{

    public function AgregarTarea(Request $request)
    {
        $Tarea = new Tarea();
        $Tarea = crearTarea($Tarea, $request);
        $Tarea->save();
    }

    private function crearTarea($Tarea, $request)
    {
        $Tarea->Titulo = $request['titulo'];
        $Tarea->Contenido = $request['contenido'];
        $Tarea->Estado = $request['estado'];
        $Tarea->Autor = $request['autor'];
        return $Tarea;
    }
}
