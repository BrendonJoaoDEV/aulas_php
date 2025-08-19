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

            echo '<h2> 8 - Dois alunos com quatro notas </h2>';

            $alunos = [
                [
                    'nome' => 'Maria',
                    'nota1' => 10,
                    'nota2' => 9,
                    'nota3' => 8,
                    'nota4' => 10
                ],
                [
                    'nome' => 'João',
                    'nota1' => 7,
                    'nota2' => 8,
                    'nota3' => 6,
                    'nota4' => 9
                ]
            ];

            // PErcorre cada aluno no array
            foreach ($alunos as $aluno) {
                // Captura o nome do aluno
                $nome = $aluno['nome'];

                // Extrai apenas as notas (ignorando a primeira chave, que é o 'nome')
                $notas = array_slice($aluno, 1); // Retorna um array com as 4 notas

                // Soma todas as notas
                $soma_notas = array_sum($notas);

                // Calcula a média das notas
                $media = $soma_notas / count($notas);

                // Exibe os dados do aluno
                echo "<h3>Aluno: $nome</h3>";
                echo 'Notas: ' . implode(', ', $notas) . '<br>'; // Junta as notas em uma string separadas por vírgula
                echo "Soma: $soma_notas<br>";

                // Exibe a média com 2 casas decimais, vírgula como separador decimal e ponto como separador de milhar
                echo 'Média: ' . number_format($media, 2, ',', '.') . '<hr>';
            }
        ?>
    </main>
</body>
</html>