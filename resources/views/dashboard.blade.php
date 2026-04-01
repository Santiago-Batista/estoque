@extends('layouts.app')

@section('content')

<h1>Dashboard</h1>

<div style="display:flex; gap:20px;">
    
    <div style="background:white;padding:20px;border-radius:10px;">
        <h3>Total de Produtos</h3>
        <p>{{ $total }}</p>
    </div>

    <div style="background:white;padding:20px;border-radius:10px;">
        <h3>Estoque Baixo</h3>
        <p>{{ $baixo }}</p>
    </div>

</div>

@endsection