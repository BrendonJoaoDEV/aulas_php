<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de nº primos em PHP</title>
</head>
<body>
    <header>
        <h1>Gerador de nº primos em PHP</h1>
    </header>

    <main>
        <section>
            <form method="POST">
                <input id="etr-numero" name="etr-numero" placeholder="Digite o último nº do intervalo que deseja" type="number" required>

                <button id="btn-gerar" type="submit">Gerar</button>
            </form>

            <p id="erro"></p>
        </section>

        <section>
            <?php
                include "public/processa.php";

                $numeros = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                $resultado = 0;
                foreach ($numeros as $numero) {
                    echo verificarPrimo($numero);
                }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Brendon J. C. Neves</p>
    </footer>
</body>
</html>