<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enem;

class EnemController extends Controller
{
    public function index() {
        return view('enem');
    }

    public function quiz() {
        return view('template.quiz.show')->with(['questoes' => Enem::all(), 'num_questoes' => Enem::count()]);
    }

    public function verifica_respostas(Request $request)
    {
        $questoes = Enem::all();
        $respostas = $request->all();
        $acertos = 0;

        for ($i = 1; $i <= Enem::count(); $i++) {
            if ($questoes->get($i-1)->resposta == $respostas["resposta-q".$i]) {
                    $acertos++;
            }
        }

        return view('enem.resultado')->with(['num_acertos' => $acertos, 'num_questoes' => Enem::count()]);


    }
}
