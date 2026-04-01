@extends('layouts.app')

@section('content')

<h1>Estoque Baixo</h1>

@foreach($produtos as $p)
    <div style="background:red;color:white;padding:10px;margin:10px 0;">
        {{ $p->nome }} - Qtd: {{ $p->quantidade }}
    </div>
@endforeach

@endsection