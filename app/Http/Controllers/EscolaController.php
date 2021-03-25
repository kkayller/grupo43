<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\escola;

class EscolaController extends Controller
{
    //Apresentar view de cadastro
    public function cadastro(){
        return view('escolas.create');
    }

    //CRUD

    //Cadastrar escola no BD
    public function store(Request $request){
        //cadastro no BD
        $escola = escola::create($request->all());
        return "Cadastro realizado com sucesso";
    }

    
}