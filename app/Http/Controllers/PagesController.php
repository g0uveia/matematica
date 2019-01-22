<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ListaExercicio;

class PagesController extends Controller
{
    function index() {
        return view('index');
    }

    function videoaulas() {
        return view('videoaula.index');
    }

    function contextualizacao() {
        return view('contextualizacao');
    }

    function resolucao() {
        return view('resolucao');
    }

    function lista() {
        return view('lista');
    }

    function quiz_lista() {
        return view('lista.quiz')->with('questoes', ListaExercicio::all());
    }

    function quiz_resultado(Request $request) {
        $questoes = ListaExercicio::all();
        $respostas = $request->all();
        $acertos = 0;

        for ($i = 1; $i <= ListaExercicio::count(); $i++) {
            if ($questoes->get($i-1)->resposta == $respostas["resposta-q".$i]) {
                $acertos++;
            }
        }

        return view('lista.resultado')->with(['num_acertos' => $acertos, 'num_questoes' => ListaExercicio::count()]);;
    }
}
