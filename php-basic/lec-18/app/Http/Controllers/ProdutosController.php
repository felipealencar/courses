<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    public function create()
    {
        return view('produtos.create');
    }

    public function show(Produto $produto)
    {
        return view('produtos.show', compact('produto'));
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

        return 'Produto criado com sucesso!';
    }

    public function update(Request $request, Produto $produto)
    {
        $request->validate([
            'nome' => 'required',
            'preco' => 'required',
            'quantidade' => 'required'
        ]);

        $produto->update($request->all());

        return 'Produto atualizado com sucesso!';
    }

    public function index()
    {
        $produtos = Produto::latest()->paginate(5);

        return view('produtos.index', compact('produtos'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();

        return redirect()->route('produtos.index')
            ->with('success', 'Produto excluído com sucesso');
    }

}
