<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Events;
class SportController extends Controller
{
    public function Index(){
        return view('welcome');
    }
    public function store(Request $request){
        $variavel = new Events;
        $variavel -> title = $request-> title;
        $variavel -> descricao = $request-> descricao;
        $variavel -> start = $request-> start;
        $variavel -> inicio = $request-> inicio;
        $variavel -> fim = $request-> fim;
        $variavel -> repetir = $request-> repetir;
        $variavel -> intervalo = $request-> intervalo;
        $variavel-> save();
        return redirect('/agenda');
    }
}
