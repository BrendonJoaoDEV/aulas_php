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

            echo '<h2> 9 - Dois alunos com 4 notas (usando foreach)</h2>';

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

                // Percorre cada aluno no array principal
                foreach ($alunos as $aluno) {
                    // Armazena o nome do aluno separadamente
                    $nome = $aluno['nome'];

                    // Inicializa variáveis para soma das notas e contagem
                    $soma_notas = 0;
                    $qtd_notas = 0;
                    
                    // Percorre os dados de cada aluno (chaves e valores)
                    foreach ($aluno as $chave => $valor) {
                        // Ignora a chave 'nome' e soma apenas valores numéricos
                        if ($chave !== 'nome' && is_numeric($valor)) {
                            $soma_notas += $valor; // soma das notas
                            $qtd_notas++; // Conta quantas notas foram somadas
                        }
                    }
                }

                // Calcula a média
                $media = $soma_notas / $qtd_notas;

                // Exibe os dados do aluno
                echo "<h3>Aluno: $nome</h3>";
                echo "Soma: $soma_notas<br>";
                // Formata a média com 2 casas decimais
                echo 'Média: ' . number_format($media, 2, ',', '.') . '<hr>';

        ?> 
    </main>
</body>
</html>