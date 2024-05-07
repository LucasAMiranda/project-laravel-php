<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro de Novos Usuários</title>
    <link rel="stylesheet" href="{{ asset('asset/css/estilo.css') }}">
</head>
<body>
<main>
    <div class="logo">
        <h1></h1> 
        <img class="logo_drone" src="{{ asset('imagens/logo.png') }}" alt="logo da empresa drone">
    </div>

    <form action="{{ route('login') }}" method="POST">
        @csrf
        <fieldset>
            <legend>Tela de Login</legend>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
        </fieldset>
        <button type="submit">Entrar</button>
        <a class="button" href="{{ route('register') }}">Inscrever-se</a>
    </form>
</main>
</body>
</html>
