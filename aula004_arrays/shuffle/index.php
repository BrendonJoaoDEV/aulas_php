<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <!-- 
        A função shuffle() só funciona corretamente com arrays indexados (numéricos).
        Quando você usa shuffle() em um array associativo, o PHP:
        Descarta as chaves e Reorganiza apenas os valores, converte o array em um array 
        indexado (com índices numéricos de 0 em diante).
    -->
</head>
<body>
    <header>
        <h1>Embaralhando um array: shuffle()</h1>
    </header>
    <main>
        <?php
            echo '<hr>';

            echo '<h2> 6 - Shuffle </h2>';

            // Criação de um array associativo
            $array = [
                'nome' => 'Maria',
                'idade' => 40,
                'peso' => 50.5
            ];

            // Exibe o array originl
            echo '<pre>';
            print_r($array);
            echo '</pre>';

            // Aplica a função shuffle() para embaralhar os elementos do array
            shuffle($array); //IMPORTANTE: isso remove chaves associativas!

            // Exibe o array após o embaralhamento
            echo '<pre>';
            print_r($array);
            echo '</pre>';
        ?>
    </main>
</body>
</html>