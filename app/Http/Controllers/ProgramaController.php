<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProgramaController extends Controller
{
    public function InsertPro(Request $programa)
    {
        $instanciaprograma = new App\Programa();
        $instanciaprograma->NombrePrograma = $programa->NombrePrograma;
        $instanciaprograma->Tipo_Programa = $programa->Tipo_Programa;
        $instanciaprograma->DuracionMeses = $programa->DuracionMeses;
        $instanciaprograma->LineaPRograma = $programa->LineaPRograma;
        $instanciaprograma->save();

        return redirect('Programa/view');
    }

    public function ViewPro()
    {
        $objeto = App\Programa::all();
        return view('Programa/view', compact($objeto));
    }

    public function DeletePro($id)
    {
        $programa = App\Programa::FindOrFail($id);
        $programa->delete();

        return redirect('Programa/view');
    }

    public function DatosUpdate($id)
    {
        $objeto = App\Programa::FindOrFail($id);
        return view('Programa/update', compact('objeto'));
    }

    public function UpdatePro( Request $programa )
    {
        # code...
    }
}
