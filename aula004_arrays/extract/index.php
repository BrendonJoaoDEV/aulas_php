<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>Extraíndo valores com extract()</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            echo '<h2> 1 - Extract </h2>';

            // Criação de um array associativo com chave => valor
            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
            ];

            // Exibe o array completo em um formato legível
            echo '<pre>';
            print_r($array);
            echo '</pre>';

            // A função extract() transforma as chaves do array em variáveis
            // Exemplo: cria as variáveis $nome, $idade e $peso
            extract($array);

            echo '<hr>';
        ?>
    </main>
</body>
</html>