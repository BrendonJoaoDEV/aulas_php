<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de vogais em PHP</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Contagem de vogais em PHP</h1>
    </header>

    <main>
        <section>
            <form method="POST">
                <input id="etr-string" name="etr-string" placeholder="Digite uma palavra/frase" type="text" required>

                <button id="btn-verificar" type="submit">Verificar</button>
            </form>

            <p id="erro"></p>
        </section>

        <section>
            <?php
                include 'public/processa.php';
                $resultados = contarVogais($string);
                foreach ($resultados as $resultado) {
                    echo "$resultado<br>";
                }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Brendon J. C. Neves</p>
    </footer>
</body>
</html>