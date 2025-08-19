<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <header>
        <h1>Soma de notas</h1>
    </header>

    <main>
        <?php
            echo '<hr>';

            // Título da seção 
            echo '<h2> 7 - Soma de array com varredura </h2>';

            // Criação de um array associativo com nome do aluno e quatro notas
            $alunos = [
                'aluno' => 'Maria',
                'nota1' => 10,
                'nota2' => 10,
                'nota3' => 10,
                'nota4' => 10
            ];

            // Exibe o conteúdo do array formatado na tela
            echo '<pre>';
            print_r($alunos);
            echo '</pre>';

            // Inicializa a variável que armazenará a soma das notas
            $soma_notas = 0;
            // Loop que percorre o array inteiro
            foreach ($alunos as $chave => $valor) {
                // Verifica se o valor atual é numérico (para somar apenas as notas)
                if (is_numeric($valor)) {
                    $soma_notas += $valor;
                }
            }

            // Mostra a soma das notas
            echo '<hr>';
            print_r('Soma de notas: ' . $soma_notas);
            echo '<hr>';
        ?>
    </main>
</body>
</html>