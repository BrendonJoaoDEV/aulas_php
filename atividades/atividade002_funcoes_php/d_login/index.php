<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login básico em PHP</title>
</head>
<body>
    <header>
        <h1>Login básico em um sistema em PHP</h1>
    </header>

    <main>
        <form method="POST">
            <input id="etr-nome-usuario" name="etr-nome-usuario" type="text" required>

            <input id="etr-senha" name="etr-senha" type="password" required>

            <input id="etr-confirmacao" name="etr-confirmacao" type="text" required>

            <button id="btn-cadastrar" type="submit">Cadastrar</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2025 - Brendon J. C. Neves</p>
    </footer>
</body>
</html>