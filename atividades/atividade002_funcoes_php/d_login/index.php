<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login básico em PHP</title>
</head>
<body>
    <header>
        <h1>Login básico em um sistema em PHP</h1>
    </header>

    <main>
        <!-- Inclui o arquivo processa.php -->
        <?php include 'public/processa.php'; ?>
        <!-- Abre uma condição para verificar se a sessão foi iniciada -->
        <?php if (isset($_SESSION['situacao'])): ?>
            <!-- Abre um switch case para definir qual página será carregada -->
            <?php switch ($_SESSION['situacao']) {
                case 'não cadastrado': ?>
                    <section>
                        <h3>Cadastro</h3>
                        <hr>
                        <form method="POST">
                            <label for="etr-nome-usuario">Nome de usuário:</label>
                            <input id="etr-nome-usuario" name="etr-nome-usuario" type="text" required>
                
                            <label for="etr-senha">Senha:</label>
                            <input id="etr-senha" name="etr-senha" type="password" required>
                
                            <label for="etr-confirmacao">Confirmacao senha:</label>
                            <input id="etr-confirmacao" name="etr-confirmacao" type="text" required>
                
                            <button id="btn-cadastrar" type="submit">Cadastrar</button>
                        </form>
                    </section>
                <?php
                    // Cadastra o usuário e define a nova situação
                    // $_SESSION['situacao'] = cadastrarUsuario();
                    // Para esse caso
                    break;

                    // Abre o próximo caso
                    case 'cadastrado': 
                        $tentativas = 0; ?>
                    <section>
                        <h3>Login</h3>
                        <hr>
                        <?php while ($tentativas <= 3): ?>
                            <form method="POST">
                                <label for="etr-nome-usuario">Nome de usuário:</label>
                                <input id="etr-nome-usuario" name="etr-nome-usuario" type="text" required>

                                <label for="etr-senha">Senha:</label>
                                <input id="etr-senha" name="etr-senha" type="password" required>

                                <button type="submit">Logar</button>
                            </form>

                            <?php
                                // $_SESSION['situacao'] = verificarLogin();
                                if ($_SESSION['situacao'] === 'logado') {
                                    break;
                                } else {
                                    echo "<p>Nome de usuário ou senha inválido";
                                    $tentativas++;
                                    continue;
                                }
                            ?>
                        <?php endwhile; ?>
                    </section>
                    <?php
                        // Para esse caso
                        break;

                        // Abre o próximo caso
                        case 'logado': ?>
                    <section>
                        <h3>Área restrita</h3>
                        <hr>
                        <p>Sistema aqui!</p>
                        <form method="POST">
                            <button type="submit" value="sair">Sair</button>
                        </form>
                    </section>
                        <?php
                        // Para o último caso
                        break;
                        // Fecha o switch case
                            } ?>
        <?php endif; ?>
    </main>

    <footer>
        <p>&copy; 2025 - Brendon J. C. Neves</p>
    </footer>
</body>
</html>