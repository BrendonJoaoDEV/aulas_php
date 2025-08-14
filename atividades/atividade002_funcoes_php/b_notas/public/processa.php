<?php
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
        $escola[] = $aluno_adicionar;
        return $escola;
    }

    function visualizarAlunos($escola) {
        foreach ($escola as $aluno) {
            print_r($aluno);
        }
    }


    if (isset($_POST["etr-nome"])) {
        $notas = [
            $_POST["etr-nota1"],
            $_POST["etr-nota2"],
            $_POST["etr-nota3"],
            $_POST["etr-nota4"]
        ];

        $media = calcularMedia($notas);

        $aluno = [
            "nome" => $_POST["etr-nome"],
            "nota1" => $notas[0],
            "nota2" => $notas[1],
            "nota3" => $notas[2],
            "nota4" => $notas[3],
            "media" => $media,
            "situacao" => verificarSituacao($media)
        ];

        $escola = adicionarAluno($aluno, $escola);
    }
?>