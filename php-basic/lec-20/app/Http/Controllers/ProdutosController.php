<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create(){
        return view('produtos.create');
    }

    public function store(Request $request){
        Produto::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        return "Produto cadastrado com sucesso.";
    }

    public function show(Request $request, Produto $produto)
    {
        return view('pages.produtos.show', [
                'record' =>$produto,
        ]);

    } 
}

