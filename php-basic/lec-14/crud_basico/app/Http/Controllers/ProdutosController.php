<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {   
        $produto = new Produto();
        $produtos = $produto->getProdutos();

        return view('produtos.create')->with('produtos', $produtos);
    }
    
    
    public function store(Request $request)
    {
        
        $produto = new Produto;
        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        $produto->save();

        // redirect
        return back()->with('success','Produto cadastrado com sucesso');
    }

    public function list()
    {
        $produto = new Produto;
        return $produto->getProdutos();
    }
}
