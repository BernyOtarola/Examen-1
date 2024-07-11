<?php

// app/Http/Controllers/RuletaController.php

namespace App\Http\Controllers;

use App\Models\Ruleta;
use Illuminate\Http\Request;

class RuletaController extends Controller
{
    public function girar()
    {
        $numeroGanador = rand(0, 36); // Generar un número aleatorio (ejemplo)

        $ruleta = Ruleta::create([
            'numero_ganador' => $numeroGanador,
        ]);

        return redirect()->route('ruleta.resultado', $ruleta->id);
    }

    public function mostrarResultado(Ruleta $ruleta)
    {
        return view('ruleta.resultado', compact('ruleta'));
    }
}
