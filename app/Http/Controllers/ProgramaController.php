<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;

class ProgramaController extends Controller
{
    public function ViewInsert()
    {
        return view('Programa/inser');
    }

    public function InsertPro(Request $programa)
    {
        $instanciaprograma = new App\Programa();
        $instanciaprograma->NombrePrograma = $programa->NombrePrograma;
        $instanciaprograma->Tipo_Programa = $programa->Tipo_Programa;
        $instanciaprograma->DuracionMeses = $programa->DuracionMeses;
        $instanciaprograma->LineaPrograma = $programa->LineaPrograma;
        $instanciaprograma->save();

        return redirect('Programa/view');
    }

    public function ViewPro()
    {
        $objeto = App\Programa::all();
        return view('Programa/view', compact('objeto'));
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

    public function UpdateBD( Request $programa )
    {
        $programanew = App\Programa::FindOrFail($programa->id);
        $programanew->NombrePrograma= $programa->NombrePrograma;
        $programanew->Tipo_Programa = $programa->Tipo_Programa;
        $programanew->DuracionMeses = $programa->DuracionMeses;
        $programanew->LineaPrograma = $programa->LineaPrograma;
        $programanew->save();

        return redirect('Programa/view');


    }
}
