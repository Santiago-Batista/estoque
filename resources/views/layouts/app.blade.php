<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">

<style>
body {
    margin:0;
    font-family:Arial;
    display:flex;
    background:#f1f5f9;
}

/* MENU */
.sidebar {
    width:240px;
    background:#111827;
    color:white;
    height:100vh;
    padding:20px;
}

.sidebar h2 {
    margin-bottom:30px;
}

.sidebar a {
    display:block;
    color:#9ca3af;
    text-decoration:none;
    margin:10px 0;
}

.sidebar a:hover {
    color:white;
}

/* CONTEÚDO */
.content {
    flex:1;
    padding:20px;
}

/* TOPO */
.topbar {
    display:flex;
    justify-content:space-between;
    margin-bottom:20px;
}

/* BOTÃO */
button {
    padding:8px 12px;
    border:none;
    border-radius:6px;
    cursor:pointer;
    background:#ef4444;
    color:white;
}
</style>

</head>

<body>

<div class="sidebar">
    <h2>📦 Estoque</h2>

    <a href="/dashboard">Dashboard</a>
    <a href="/produtos">Produtos</a>
    <a href="/estoque-baixo">Estoque baixo</a>
</div>

<div class="content">

    <div class="topbar">
        <div>👤 {{ auth()->user()->name }}</div>

        <form method="POST" action="/logout">
            @csrf
            <button>Sair</button>
        </form>
    </div>

    @yield('content')

</div>

</body>
</html>