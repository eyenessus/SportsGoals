<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SportsGoals;
class SportController extends Controller
{
    public function Index(){
        return view('welcome');
    }
    public function store(Request $request){
        $variavel = new SportsGoals;
        $variavel -> nomeEvento = $request-> NomeEvento;
        $variavel -> descricao = $request-> descricao;
        $variavel -> data = $request-> data;
        $variavel -> inicio = $request-> inicio;
        $variavel -> fim = $request-> fim;
        $variavel -> repeticao = $request-> repeticao;
        $variavel -> intervalo = $request-> intervalo;
        $variavel-> save();
        return redirect('/');
    }
}
