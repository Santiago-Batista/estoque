<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Editar Produto</title>

<style>
body {
    font-family: Arial;
    background: #eef2f7;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.form-box {
    background: white;
    padding: 30px;
    border-radius: 10px;
    width: 350px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin: 8px 0;
}

button {
    width: 100%;
    padding: 10px;
    background: #ffc107;
    border: none;
}

a {
    display: block;
    text-align: center;
    margin-top: 10px;
}
</style>

</head>
<body>

<div class="form-box">
    <h2>Editar Produto</h2>

    <form method="POST" action="{{ route('produtos.update', $produto) }}">
        @csrf
        @method('PUT')

        <input type="text" name="nome" value="{{ $produto->nome }}">
        <textarea name="descricao">{{ $produto->descricao }}</textarea>
        <input type="text" name="categoria" value="{{ $produto->categoria }}">
        <input type="number" name="quantidade" value="{{ $produto->quantidade }}">
        <input type="text" name="preco" value="{{ $produto->preco }}">
        <input type="text" name="fornecedor" value="{{ $produto->fornecedor }}">

        <button>Atualizar</button>
    </form>

    <a href="{{ route('produtos.index') }}">Voltar</a>
</div>

</body>
</html>