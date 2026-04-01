<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Login</title>

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    height: 100vh;
    background: linear-gradient(135deg, #4f46e5, #9333ea);
    display: flex;
    justify-content: center;
    align-items: center;
}

/* CARD */
.container {
    background: rgba(255,255,255,0.1);
    backdrop-filter: blur(15px);
    padding: 40px;
    border-radius: 15px;
    width: 320px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.3);
    color: white;
}

h2 {
    margin-bottom: 20px;
}

/* INPUTS */
.input-group {
    position: relative;
    margin-bottom: 20px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 8px;
    outline: none;
}

/* BOTÃO */
button {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 8px;
    background: #4f46e5;
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background: #3730a3;
}

/* LINK */
.link {
    margin-top: 15px;
    display: block;
    color: #ddd;
}

.link a {
    color: #fff;
    font-weight: bold;
}
</style>

</head>
<body>

<div class="container">
    <h2>Entrar</h2>

    <form method="POST" action="/login">
        @csrf

        <div class="input-group">
            <input type="email" name="email" placeholder="Email" required>
        </div>

        <div class="input-group">
            <input type="password" name="password" placeholder="Senha" required>
        </div>

        <button type="submit">Entrar</button>
    </form>

    <span class="link">
        Não tem conta? <a href="/register">Cadastre-se</a>
    </span>
</div>

</body>
</html>