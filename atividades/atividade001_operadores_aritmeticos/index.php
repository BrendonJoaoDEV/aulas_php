<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora em PHP</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <header>
        <h1>Calculadora: Operadores Aritméticos</h1>
    </header>

    <main>
        <form id="formulario" method="POST" action="resultado.php">
            <label for="primeiro-numero">Digite o primeiro número:</label>
            <input id="primeiro-numero" name="primeiro-numero" type="number" required>

            <label for="segundo-numero">Digite o segundo número:</label>
            <input id="segundo-numero" name="segundo-numero" type="number" required>

            <label for="escolha-operacao">Escolha a operação:</label>
            <select id="escolha-operacao" name="operacao">
                <option value="selecione">--Selecione--</option>
                <option value="soma">Soma (+)</option>
                <option value="subtracao">Subtração (-)</option>
                <option value="multiplicacao">Multiplicação (&#215;)</option>
                <option value="divisao">Divisão (&#247;)</option>
            </select>

            <p id="erro" name="erro"></p>

            <button type="submit">Calcular</button>
        </form>
    </main>
</body>
</html>