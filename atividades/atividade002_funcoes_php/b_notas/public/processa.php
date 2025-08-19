<?php
    session_start();

    function calcularMedia($valores) {
        $soma = 0;
        foreach ($valores as $valor) {
            $soma += $valor;
        }
        $media = $soma / count($valores);
        return $media;
    }

    function verificarSituacao($media) {
        $situacao = "";
        if ($media >= 15) {
            return $situacao = "Aprovado";
        } else if ($media >= 10) {
            return $situacao = "Recuperação";
        } else {
            return $situacao = "Reprovado";
        }
    }

    function adicionarAluno($aluno, $escola) {
        $aluno_adicionar = "";
        foreach ($aluno as $key => $value) {
            $aluno_adicionar .= "<td>$value</td>";
        }
        array_push($escola, $aluno_adicionar);
        return $escola;
    }

    function visualizarAlunos($escola) {
        foreach ($escola as $aluno) {
            echo '<tr>';
            print_r($aluno);
            echo '</tr>';
        }
    }


    if (isset($_POST["etr-nome"])) {

        $nome = $_POST["etr-nome"];

        $nota1 = (float) $_POST["etr-nota1"];
        $nota2 = (float) $_POST["etr-nota2"];
        $nota3 = (float) $_POST["etr-nota3"];
        $nota4 = (float) $_POST["etr-nota4"];
        

        $notas = compact('nota1', 'nota2', 'nota3', 'nota4');

        $media = calcularMedia($notas);

        $situacao = verificarSituacao($media);

        $aluno = compact('nome', 'nota1', 'nota2', 'nota3', 'nota4', 'media', 'situacao');

        if (isset($_SESSION['escola'])) {
            $_SESSION['escola'] = adicionarAluno($aluno, $_SESSION['escola']);
            echo 'um';
        } else {
            $_SESSION['escola'] = [];
            $_SESSION['escola'] = adicionarAluno($aluno, $_SESSION['escola']);
            echo 'dois';
        }
    }
?>