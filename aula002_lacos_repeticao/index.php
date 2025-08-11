<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de Estruturas de Repetição em PHP</title>
    <!-- Link para o arquivo CSS externo que estiliza a página -->
     <link rel="stylesheet" href="public/css/estilo.css">
</head>
<body>
    <!-- Cabeçalho da página -->
    <header>
        <h1>Exemplo de Estrutura de Repetição em PHP</h1>
    </header>

    <!-- Conteúdo principal da página -->
    <main>
        <!-- Seção que exibe o loop FOR -->
        <section>
        <h2>Estrutura FOR</h2>
        <div class="caixa">
            <?php
                // Inclui o arquivo PHP que contém as funções
                // Em seguida, executa a função que exibe o loop FOR
                include "public/processa.php";
                exibirFor();
            ?>
        </div>
        </section>

        <!-- Seção que exibe o loop WHILE -->
        <section>
            <h2>Estrutura WHILE</h2>
            <div class="caixa">
                <?php
                    // Chama a função que exibe o loop WHILE
                    exibirWhile();
                ?>
            </div>
        </section>

        <!-- Seção que exibe o loop FOREACH -->
        <section>
            <h2>Estrutura FOREACH</h2>
            <div class="caixa">
                <?php
                    // Chama a função que exibe o loop FOREACH
                    exibirForeach();
                ?>
            </div>
        </section>
    </main>

    <!-- Rodapé da página -->
    <footer>
        <p>Exemplo didático de PHP &copy; 2025</p>
    </footer>
</body>
</html>