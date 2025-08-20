<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"> <!-- Define a codificação dos caracteres para suportar acentuação -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title> <!-- Título que aparece na aba do navegador -->
    <style>
        /* Define a fonte e o espaçamento do corpo da página */
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
        }
        /* Estiliza os campos de rexto e números para ficarem mais legiveis */
        input[type="text"], input[type="number"] {
            padding: 8px;
            margin: 5px 0;
            width: 100%;
            max-width: 300px; /* Limita o tamanho máximo do campo */
        }
        /* Estiliza o botão de enviar (submit) */
        input[type="submit"] {
            padding: 10px 20px;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <h1>Cadastro de Aluno</h1> <!-- Título principal da página -->

    <!-- Formulário que envia os dados para esta mesma página via método POST -->
    <form method="POST">
        <label>Nome do Aluno:</label><br>
        <!-- Campo para digitar o nome, obrigatório (required) -->
        <input type="text" name="nome" requiews><br>

        <label>Nota 1:</label><br>
        <!-- Campo para digitar a nota 1, aceita números decimais, obrigatório -->
        <input type="number" name="nota1" step="0.01" required><br>

        <label>Nota 2:</label><br>
        <input type="number" name="nota2" step="0.01" required><br>

        <label>Nota 3:</label><br>
        <input type="number" name="nota3" step="0.01" required><br>

        <label>Nota 4:</label><br>
        <input type="number" name="nota4" step="0.01" required><br>

        <input type="submit" value="Cadastrar">
    </form>

    
</body>
</html>