<?php
    function calcularTabuada($numero) {
        $operacoes = ['+', '-', '*', '/'];
        $resultados = [];
        foreach ($operacoes as $operacao) {
            $resultado = "";
            for ($i=1; $i <= 10; $i++) {
                $calculo = eval("$numero eval($operacao) $i;");
                $resultado .= "$numero $operacao $i = $calculo<br>";
            }
            $resultados[] = $resultado;
        }
        return $resultados;
}

$numero = (int) htmlspecialchars($_POST['etr-numero']);
?>