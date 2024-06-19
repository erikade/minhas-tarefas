<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar E-mail</title>
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

        .confirm-container {
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

        .confirm-message {
            font-size: 1.1em;
            margin-bottom: 1.5em;
            color: #aaa; /* Cor cinza claro */
        }

        .confirm-form button {
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

        .confirm-form button:hover {
            background: #777; /* Cor cinza claro */
            transform: scale(1.05);
        }

        .back-to-login {
            display: block;
            margin-top: 1em;
            color: #aaa; /* Cor cinza claro */
            text-decoration: none;
            font-size: 0.9em;
        }

        .back-to-login:hover {
            color: #fff; /* Cor branca */
        }
    </style>
</head>
<body>
    <div class="confirm-container">
        <h1 class="title">Confirmar E-mail</h1>
        <p class="confirm-message">Enviamos um e-mail de confirmação para o seu endereço de e-mail. Por favor, verifique sua caixa de entrada e clique no link de confirmação.</p>
        <form class="confirm-form">
            <button type="submit">Reenviar E-mail</button>
            <a href="/?login" class="back-to-login">Voltar para Login</a>
        </form>
    </div>
</body>
</html>
