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
                        $calculo = $numero + $i;
                        $resultado .= "<li>$calculo - $numero = $i</li>";
                        break;
                    case "*":
                        $calculo = $numero * $i;
                        $resultado .= "<li>$numero &#215; $i = $calculo</li>";
                        break;
                    case "/":
                        $calculo = $numero * $i;
                        $resultado .= "<li>$calculo &#247; $numero = $i</li>";
                        break;
                }
            }
            $resultados[] = "<ul>$resultado</ul>";
        }
        return $resultados;
    }

    if (isset($_POST["etr-numero"])) {
        $numero = (int) htmlspecialchars($_POST["etr-numero"]);
    }
?>