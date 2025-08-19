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
            ]
        ?> 
    </main>
</body>
</html>