<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Novo Produto</title>

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
    background: #667eea;
    color: white;
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
    <h2>Novo Produto</h2>

    <form method="POST" action="{{ route('produtos.store') }}">
        @csrf

        <input type="text" name="nome" placeholder="Nome" required>
        <textarea name="descricao" placeholder="Descrição"></textarea>
        <input type="text" name="categoria" placeholder="Categoria">
        <input type="number" name="quantidade" placeholder="Quantidade">
        <input type="text" name="preco" placeholder="Preço">
        <input type="text" name="fornecedor" placeholder="Fornecedor">

        <button>Salvar</button>
    </form>

    <a href="{{ route('produtos.index') }}">Voltar</a>
</div>

</body>
</html>