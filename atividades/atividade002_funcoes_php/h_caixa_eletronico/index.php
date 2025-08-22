<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa eletrônico em PHP</title>
</head>
<body>
    <header>
        <h1>Caixa eletrônico em PHP</h1>
    </header>

    <main>
        <section>
            <form method="POST">
                <label for="etr-saque">Valor do saque:</label>
                <input id="etr-saque" name="etr-saque" type="number" required>

                <button id="btn-sacar" type="submit">Sacar</button>
            </form>
        </section>

        <section>
            <?php
                include 'public/processa.php';

                if (isset($cedulas)) {
                    if (gettype($cedulas) === "string") {
                        echo $cedulas;
                    } else {
                        foreach ($cedulas as $cedula => $quantidade) {
                            echo "Entregue $quantidade notas de $cedula<br>";
                        }
                    }
                }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Brendon J. C. Neves</p>
    </footer>
</body>
</html>