<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Cadastro</title>

<style>
body {
    height: 100vh;
    background: linear-gradient(135deg, #4f46e5, #9333ea);
    display: flex;
    justify-content: center;
    align-items: center;
    font-family: Arial;
}

.container {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    padding: 40px;
    border-radius: 15px;
    width: 320px;
    text-align: center;
    color: white;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
}

input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: none;
    border-radius: 8px;
}

button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 8px;
    background: #4f46e5;
    color: white;
    font-weight: bold;
    cursor: pointer;
}

button:hover {
    background: #3730a3;
}

.link {
    margin-top: 10px;
    display: block;
}

.link a {
    color: white;
    font-weight: bold;
}
</style>

</head>
<body>

<div class="container">
    <h2>Criar Conta</h2>

    <form method="POST" action="/register">
        @csrf

        <input type="text" name="name" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Senha" required>
        <input type="password" name="password_confirmation" placeholder="Confirmar Senha" required>

        <button type="submit">Cadastrar</button>
    </form>

    <span class="link">
        Já tem conta? <a href="/login">Entrar</a>
    </span>
</div>

</body>
</html>