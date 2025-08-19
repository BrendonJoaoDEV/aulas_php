<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de alunos em PHP</title>
    <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <header>
        <h1>Gestão de alunos em PHP</h1>
    </header>

    <main>
        <section>
            <form method="POST">
                <label for="etr-nome">Nome:</label>
                <input id="etr-nome" name="etr-nome" placeholder="Nome do aluno" type="text" required>

                <label for="etr-notas">Notas:</label>
                <ul id="etr-notas">
                    <input id="etr-nota1" name="etr-nota1" placeholder="Nota 1º bimestre" type="text" required>
                    <input id="etr-nota2" name="etr-nota2" placeholder="Nota 2º bimestre" type="text" required>
                </ul>
                <ul>
                    <input id="etr-nota3" name="etr-nota3" placeholder="Nota 3º bimestre" type="text" required>
                    <input id="etr-nota4" name="etr-nota4" placeholder="Nota 4º bimestre" type="text" required>
                </ul>

                <p id="erro"></p>

                <button id="btn-cadastrar" type="submit">Cadastrar</button>
            </form>

            <p id="erro"></p>
        </section>

        <section>
            <table>
                <thead>
                    <tr>
                        <th>Nome:</th>
                        <th>Nota 1º bim</th>
                        <th>Nota 2º bim</th>
                        <th>Nota 3º bim</th>
                        <th>Nota 4º bim</th>
                        <th>Média</th>
                        <th>Situação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include 'public/processa.php';
                        if (isset($_SESSION['escola'])) {
                            visualizarAlunos($_SESSION['escola']);
                        }
                    ?>
                </tbody>
            </table>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 - Brendon J. C. Neves</p>
    </footer>

    <script src="public/js/script.js"></script>
</body>
</html>