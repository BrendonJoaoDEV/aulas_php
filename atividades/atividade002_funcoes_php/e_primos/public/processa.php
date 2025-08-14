<?php
    function verificarPrimo($numero) {
        for ($i=2; $i <= $numero; $i++) {
            for ($j=2; $i; $i++) {
                if ($i % $j === 0) {
                    break;
                } else {
                    echo "$i, ";
                }
            }
        }
    }

    if (isset($_POST["etr-numero"])) {
        $numero = $_POST["etr-numero"];
    }
?>