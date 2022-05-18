<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        $nomesDosProdutos = Produto::all('nome')->toArray();
        $nomesDosProdutos = array_column($nomesDosProdutos, 'nome');
        $quantidadesDosProdutos = Produto::all('quantidade')->toArray();
        $quantidadesDosProdutos = array_column($quantidadesDosProdutos, 'quantidade');
        
        return view('produtos.create')->with('nomes', json_encode($nomesDosProdutos))
                                        ->with('quantidades', json_encode($quantidadesDosProdutos));
    }


    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'quantidade' => 'required'
        ]);

        Produto::create([
            'nome' => $request->nome,
            'preco' => $request->preco,
            'quantidade' => $request->quantidade
        ]);

        return 'Produto cadastrado com sucesso';

    }
}
