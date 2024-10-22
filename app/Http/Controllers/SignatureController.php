<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignatureController extends Controller
{
    public function index(){

        $user = auth()->user();
        $nome = $user->name;
        $documento = $user->client->document;
        $status = $user->client->signatures->first()->status->name;

        return view('teste', [
            'name' => $nome,
            'document' => $documento,
            'status' => $status
        ]);
    }
}
