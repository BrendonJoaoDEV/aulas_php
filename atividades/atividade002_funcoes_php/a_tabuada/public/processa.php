<?php
    function calcularTabuada($numero) {
        $operacoes = ["+", "-", "*", "/"];
        $resultados = [];
        foreach ($operacoes as $operacao) {
            $resultado = "";
            for ($i=1; $i <= 10; $i++) {
                switch ($operacao) {
                    case "+":
                        $calculo = $numero + $i;
                        $resultado .= "<li>$numero + $i = $calculo</li>";
                        break;
                    case "-":
                        $calculo = $numero - $i;
                        $resultado .= "<li>$numero - $i = $calculo</li>";
                        break;
                    case "*":
                        $calculo = $numero * $i;
                        $resultado .= "<li>$numero &#215; $i = $calculo</li>";
                        break;
                    case "/":
                        $calculo = number_format($numero / $i, 2);
                        $resultado .= "<li>$numero &#247; $i = $calculo</li>";
                        break;
                }
            }
            $resultados[] = "<ul>$resultado</ul>";
        }
        return $resultados;
}

$numero = (int) htmlspecialchars($_POST['etr-numero']);
?>