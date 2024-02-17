<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //"Ficha de registro de estructuras diversas",
    //    "Ficha de registro de muros de piedra",
    //    "Ficha de registro de estructuras (muros de material vegetal)",
    //    "Ficha de registro de estructuras (muros de adobe)",
    //    "Ficha de registro de estructuras Diversas",
    //    "Ficha de registro de depósitos"
    public function index()
    {
        return view('welcome',[
            'tipo_ficha'=>[
                "Ficha de registro de estructuras diversas",
                "Ficha de registro de muros de piedra",
                "Ficha de registro de estructuras (muros de material vegetal)",
                "Ficha de registro de estructuras (muros de adobe)",
                "Ficha de registro de estructuras Diversas",
                "Ficha de registro de depósitos"
            ]
        ]);

    }
}
