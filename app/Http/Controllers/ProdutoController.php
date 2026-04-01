<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index(Request $request)
    {
        $query = Produto::where('user_id', auth()->id());

        if ($request->search) {
            $query->where('nome', 'like', '%' . $request->search . '%');
        }

        $produtos = $query->get();

        return view('produtos.index', compact('produtos'));
    }
    public function store(Request $request)
    {
        Produto::create([
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'categoria' => $request->categoria,
            'quantidade' => $request->quantidade,
            'preco' => $request->preco,
            'fornecedor' => $request->fornecedor,
            'user_id' => auth()->id()
        ]);

        return redirect()->route('produtos.index');
    }

    public function update(Request $request, Produto $produto)
    {
        $produto->update($request->all());
        return redirect()->route('produtos.index');
    }

    public function destroy(Produto $produto)
    {
        $produto->delete();
        return redirect()->route('produtos.index');
    }

    public function baixo()
    {
        $produtos = Produto::where('quantidade', '<', 5)->get();
        return view('produtos.baixo', compact('produtos'));
    }
    public function create()
    {
        return view('produtos.create');
    }
    public function edit(Produto $produto)
    {
        return view('produtos.edit', compact('produto'));
    }
}
