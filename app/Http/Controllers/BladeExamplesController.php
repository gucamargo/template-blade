<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeExamplesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titulo = "Titulo do alertaAA";
        $mensagem = "Mensagem do alerta";
        $users = "John Doe";
        
        return view('index', [
            'titulo' => $titulo,
            'mensagem' => $mensagem,
            'users' => $users
        ]);
    }

}
