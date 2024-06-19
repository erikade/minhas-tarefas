<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <style>
        body {
            background: #000; /* Fundo preto */
            color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #222; /* Fundo cinza escuro */
            padding: 2em;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.5);
            text-align: center;
        }

        .title {
            font-size: 2em;
            margin-bottom: 1em;
            color: #fff; /* Cor do título branca */
        }

        .login-form input {
            background: rgba(255, 255, 255, 0.1);
            border: none;
            padding: 1em;
            margin: 0.5em 0;
            width: 100%;
            color: #fff;
            border-radius: 5px;
            font-size: 1em;
            transition: background 0.3s;
        }

        .login-form input:focus {
            background: rgba(255, 255, 255, 0.2);
            outline: none;
        }

        .login-form button {
            background: #555; /* Cor cinza médio */
            border: none;
            padding: 1em;
            width: 100%;
            border-radius: 5px;
            font-size: 1em;
            color: #fff;
            cursor: pointer;
            transition: background 0.3s, transform 0.3s;
        }

        .login-form button:hover {
            background: #777; /* Cor cinza claro */
            transform: scale(1.05);
        }

        .recover-password {
            display: block;
            margin-top: 1em;
            color: #aaa; /* Cor cinza claro */
            text-decoration: none;
            font-size: 0.9em;
        }

        .recover-password:hover {
            color: #fff; /* Cor branca */
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1 class="title">Bem-vindo</h1>
        <form class="login-form">
            <input type="text" placeholder="Nome" required>
            <input type="email" placeholder="E-mail" required>
            <input type="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
            <a href="/?rec_senha" class="recover-password">Recuperar Senha</a>
            <a href="/?rec_email" class="recover-password">Recuperar Email</a>
        </form>
    </div>
</body>
</html>
