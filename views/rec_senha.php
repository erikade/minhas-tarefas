<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recuperar Senha</title>
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

        .recover-container {
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

        .recover-form input {
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

        .recover-form input:focus {
            background: rgba(255, 255, 255, 0.2);
            outline: none;
        }

        .recover-form button {
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

        .recover-form button:hover {
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
    <div class="recover-container">
        <h1 class="title">Recuperar Senha</h1>
        <form class="recover-form">
            <input type="email" placeholder="Digite seu e-mail" required>
            <button type="submit">Enviar</button>
      
        </form>
    </div>
</body>
</html>
