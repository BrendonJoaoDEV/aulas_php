<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada em PHP</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Tabuada em PHP</h1>
    </header>

    <main>
        <section>
            <form method="POST">
                <input id="etr-numero" name="etr-numero" placeholder="Digite um número" type="number" required>

                <button id="btn-calcular" type="submit">Calcular</button>
            </form>

            <p id="erro"></p>
        </section>

        <section>
            <?php
                include 'public/processa.php';
                print_r(calcularTabuada($numero));
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Brendon J. C. Neves</p>
    </footer>

    <script src="public/js/script.js"></script>
</body>
</html>