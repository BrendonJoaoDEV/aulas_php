<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de temperaturas em PHP</title>
</head>
<body>
    <header>
        <h1>Conversor de temperaturas em PHP</h1>
    </header>

    <main>
        <section>
            <form method="POST">
                <input id="etr-temperatura" name="etr-temperatura" placeholder="Digite a temperatura" type="number" required>

                <select id="etr-convercao" name="etr-convercao">
                    <option value="c => k">°Celsius para Kelvin</option>
                    <option value="c => f">°Celsius para °Fahrenheit</option>
                    <option value="f => c">°Fahrenheit para °Celsius</option>
                    <option value="f => k">°Fahrenheit para Kelvin</option>
                    <option value="k => c">Kelvin para °Celsius</option>
                    <option value="k => f">Kelvin para °Fahrenheit</option>
                </select>

                <button id="btn-converter" type="submit">Converter</button>
            </form>

            <p id="erro"></p>
        </section>

        <section>
            <?php
                include "public/processa.php";
                if (isset($resultado)) {
                    echo "<p>$resultado</p>";
                }
            ?>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2025 - Brendon J. C. Neves</p>
    </footer>
</body>
</html>