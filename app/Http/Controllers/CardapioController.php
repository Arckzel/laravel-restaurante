<?php

namespace App\Http\Controllers;

use App\Models\Cardapios;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CardapioController extends Controller
{

    public function view(){
        $cardapios = $this->getTodosCardapios();
        return Inertia::render('Cardapio',['cardapios'  =>  $cardapios]);
    }

    public function getTodosCardapios(){
        $cardapios = Cardapios::all();
        return $cardapios;
    }

}
