<?php

namespace App\Http\Controllers;

use App\Models\Pratos;
use Illuminate\Http\Request;

class PratosController extends Controller
{
    public function getTodosPratos(){
        $pratos = Pratos::all();
        return $pratos;
    }
}
