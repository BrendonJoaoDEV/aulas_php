<?php
    session_start();

    // Inicializa o array de alunos na sessão, se ainda não existir
    if (!isset($_SESSION['alunos'])) {
        $_SESSION['alunos'] = [];
    }

    // Se o botão "Limpar Lista" for clicado
    if (isset($_POST['limpar'])) {
        session_destroy();
        session_start(); // Reinicia a sessão após destruir
        $_SESSION['alunos'] = []; // Reinicializa o array
    }

    // Se o formulário for enviado para adicionar aluno
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['limpar'])) {
        // Cria um novo aluno a partir dos dados enviados
        $novo_aluno = [
            'nome' => $_POST['nome'],
            'nota1' => (float) $_POST['nota1'],
            'nota2' => (float) $_POST['nota2'],
            'nota3' => (float) $_POST['nota3'],
            'nota4' => (float) $_POST['nota4']
        ];

        // Adiciona à lista na sessão
        $_SESSION['alunos'][] = $novo_aluno;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos (com Session)</title>
    <style>
        body {font-family: Arial; margin: 40px; }
        input[type="text"], input[type="number"] { padding: 8px; margin: 5px 0; width: 100%; max-width: 300px; }
        input[type="submit"] { padding: 10px 20px; margin-top: 15px; }
        hr { margin: 30px 0 }
    </style>
</head>
<body>
    <h1>Cadastro de Aluno (com Session)</h1>

    <!-- Formulário para adicionar aluno -->
    <form method="POST">
        <label>Nome do Aluno:</label><br>
        <input type="text" name="nome" required><br>

        <label>Nota 1:</label><br>
        <input type="text" name="nota1" step="0.01" required><br>

        <label>Nota 2:</label><br>
        <input type="text" name="nota2" step="0.01" required><br>

        <label>Nota 3:</label><br>
        <input type="text" name="nota3" step="0.01" required><br>

        <label>Nota 4:</label><br>
        <input type="text" name="nota4" step="0.01" required><br>

        <input type="submit" value="Adicionar Aluno">
    </form>

    <form method="POST" style="margin-top: 20px;">
        <input type="hidden" name="limpar" value="1">
        <input type="submit" value="Limpar Lista de Alunos">
    </form>

    <!-- Exibe a lista de alunos -->
    <?php if (!empty($_SESSION['alunos'])): ?>
        <hr>
        <h2>Lista de Alunos Cadastrados</h2>
        <?php foreach ($_SESSION['alunos'] as $aluno): ?>
            <h3><?= htmlspecialchars($aluno['nome']) ?></h3>
            <ul>
                <li>Nota 1: <?= $aluno['nota1'] ?></li>
                <li>Nota 2: <?= $aluno['nota2'] ?></li>
                <li>Nota 3: <?= $aluno['nota3'] ?></li>
                <li>Nota 4: <?= $aluno['nota4'] ?></li>
                <?php
                    $soma = $aluno['nota1'] + $aluno['nota2'] + $aluno['nota3'] + $aluno['nota4'];
                    $media = $soma / 4;
                ?>
                <li><strong>Soma:</strong> <?= $soma ?></li>
                <li><strong>Média:</strong> <?= number_format($media,2, ',', '.') ?></li>
            </ul>
        <?php endforeach; ?>
    <?php endif; ?>
</body>
</html>