<?php
    function celsiusKelvin ($temperatura_inicial) {

    }

    function celsiusFahrenheit ($temperatura_inicial) {

    }

    function fahrenheitCelsius ($temperatura_inicial) {

    }

    function fahrenheitKelvin ($temperatura_inicial) {

    }

    function kelvinCelsius ($temperatura_inicial) {

    }

    function kelvinFahrenheit ($temperatura_inicial) {

    }

    if (isset($_POST['etr-temperatura'])) {
        $temperatura_inicial = $_POST['etr-temperatura'];
        switch $_POST['etr-convercao'] {
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
            defalut:
                $resultado = "<strong>Nenhuma opção selecionada!</strong>"
                break;
        }
    }
?>