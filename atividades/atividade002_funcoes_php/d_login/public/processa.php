<?php?
    function cadastro() {

    }

    function login() {

    }

    
    function restrito() {
        
    }
    
    function cadastrarUsuario() {
        
    }
    
    function verificarLogin() {
        
    }
    
    function fazerLogout() {

    }

    session_start();
    if (!isset($_SESSION)) {
        $_SESSION['situacao'] = 'não cadastrado';
    }
>

// Verificar se esta logado: 
// Sim: restrito, Não: cadastro

// Cadastro: Verifica se usuário ainda não existe, verifica se senha e confirmação são iguais
// Sim: cadastrarUsuario, Não: Pede pra inserir de novo

// Login: Verifica se usuário existe e senha e confirmação são iguais as do banco
// Sim: restrito, Não: outra tentativa, Três tentativas: cadastro (com erro)

// Restrito: Área apenas para quem está logado
// Clica sair: fazerLogout