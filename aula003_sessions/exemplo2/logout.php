<?php
    session_start();

    // Remove todas as variáveis da sessão
    session_unset();

    // Destrói a sessão no servidor
    session_destroy();

    // Redireciona para login
    header("Location: login.php");
    exit();
?>