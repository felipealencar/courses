<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session;
use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
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
}
