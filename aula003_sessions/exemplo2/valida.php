<?php
    session_start(); // Necessário para manipular variáveis de sessão
    require 'usuarios.php'; // Inclui nosso "banco de dados" de usuários

    // Captura dados enviados pelo formulário
    $usuario = $_POST['usuario'] ?? '';
    $senha = $_POST['senha'] ?? '';

    // Variável de controle
    $login_valido = false;
    $nome_usuario = '';

    // Percorre o array de usuários para verificar credenciais
    foreach ($usuarios as $u) {
        if ($u['usuario'] === $usuario && $u['senha'] === $senha) {
            $login_valido = true;
            $nome_usuario = $u['nome'];
            break;
        }
    }

    if ($login_valido) {
        // Gera novo ID de sessão para segurança
        session_regenerate_id(true);

        // Armazena informações na sessão
        $_SESSION['usuario'] = $usuario;
        $_SESSION['nome'] = $nome_usuario;
        $_SESSION['ultimo_acesso'] = time(); // Para controle de inatividade

        // Redireciona para área restrita
        header("Location: restrita.php");
        exit();
    } else {
        // Guarda mensagem de erro e volta para login
        $_SESSION['erro'] = "Usuário ou senha inválidos!";
        header("Location: login.php");
        exit();
    }
?>