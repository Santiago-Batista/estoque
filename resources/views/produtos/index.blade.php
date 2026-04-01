@extends('layouts.app')

@section('content')

<h1>Produtos</h1>

<form method="GET">
    <input type="text" name="search" placeholder="Buscar..." style="padding:8px;border-radius:6px;">
</form>

<br>

<a href="{{ route('produtos.create') }}" style="background:#22c55e;color:white;padding:8px;border-radius:6px;text-decoration:none;">
+ Novo Produto
</a>

<br><br>

<table width="100%" bgcolor="white" cellpadding="12" style="border-radius:10px;">
<tr style="background:#f3f4f6;">
    <th>Nome</th>
    <th>Categoria</th>
    <th>Qtd</th>
    <th>Preço</th>
    <th>Ações</th>
</tr>

@foreach($produtos as $p)
<tr>
    <td>{{ $p->nome }}</td>
    <td>{{ $p->categoria }}</td>

    <td style="color: {{ $p->quantidade < 5 ? 'red' : 'black' }}">
        {{ $p->quantidade }}
    </td>

    <td>R$ {{ $p->preco }}</td>

    <td>
        <a href="{{ route('produtos.edit', $p) }}">✏️</a>

        <form method="POST" action="{{ route('produtos.destroy', $p) }}" style="display:inline;">
            @csrf
            @method('DELETE')
            <button style="background:red;">🗑</button>
        </form>
    </td>
</tr>
@endforeach

</table>

@endsection