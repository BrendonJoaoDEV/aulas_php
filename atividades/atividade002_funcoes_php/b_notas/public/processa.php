<?php
    function calcularMedia($valores) {
        $soma = 0;
        foreach ($valores as $valor) {
            $soma += $valor;
        }
        $media = $soma / count($valores);
        return $media;
    }

    function adicionarAluno($aluno, $escola) {
        $aluno_adicionar = "";
        foreach ($aluno as $key => $value) {
            $aluno_adicionar .= "<td>$value<td>";
        }
        $escola[] = $aluno_adicionar;
        return $escola;
    }

    function visualizarAlunos($escola) {
        foreach ($escola as $aluno) {
            echo "<tr>$aluno</tr>";
        }
    }
?>