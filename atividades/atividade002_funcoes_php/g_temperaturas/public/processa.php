<?php
    function celsiusKelvin ($temperatura_inicial) {
        $calculo = $temperatura_inicial + 273;
        $resultado = "<strong>$temperatura_inicial °Celsius</strong> equivale a <strong>$calculo Kelvin</strong>!";
        return $resultado;
    }

    function celsiusFahrenheit ($temperatura_inicial) {
        $calculo = (($temperatura_inicial * 9) / 5) + 32;
        $resultado = "<strong>$temperatura_inicial °Celsius</strong> equivale a <strong>$calculo °Fahrenheit</strong>!";
        return $resultado;
    }

    function fahrenheitCelsius ($temperatura_inicial) {
        $calculo = (($temperatura_inicial - 32) *5) / 9;
        $resultado = "<strong>$temperatura_inicial °Fahrenheit</strong> equivale a <strong>$calculo °Celsius</strong>!";
        return $resultado;
    }

    function fahrenheitKelvin ($temperatura_inicial) {
        $calculo = ((($temperatura_inicial - 32) *5) / 9) + 273;
        $resultado = "<strong>$temperatura_inicial °Fahrenheit</strong> equivale a <strong>$calculo Kelvin</strong>!";
        return $resultado;
    }

    function kelvinCelsius ($temperatura_inicial) {
        $calculo = $temperatura_inicial -273;
        $resultado = "<strong>$temperatura_inicial Kelvin</strong> equivale a <strong>$calculo °Celsius</strong>!";
        return $resultado;
    }

    function kelvinFahrenheit ($temperatura_inicial) {
        $calculo = ((($temperatura_inicial - 273)) * (9/5)) + 32;
        $resultado = "<strong>$temperatura_inicial Kelvin</strong> equivale a <strong>$calculo °Fahrenheit</strong>!";
        return $resultado;
    }

    if (isset($_POST['etr-temperatura'])) {
        $temperatura_inicial = $_POST['etr-temperatura'];
        switch ($_POST['etr-convercao']) {
            case "c => k":
                $resultado = celsiusKelvin($temperatura_inicial);
                break;
            case "c => f":
                $resultado = celsiusFahrenheit($temperatura_inicial);
                break;
            case "f => c":
                $resultado = fahrenheitCelsius($temperatura_inicial);
                break;
            case "f => k":
                $resultado = fahrenheitKelvin($temperatura_inicial);
                break;
            case "k => c":
                $resultado = kelvinCelsius($temperatura_inicial);
                break;
            case "k => f":
                $resultado = kelvinFahrenheit($temperatura_inicial);
                break;
            default:
                $resultado = "<strong>Nenhuma opção selecionada!</strong>";
                break;
        }
    }
?>