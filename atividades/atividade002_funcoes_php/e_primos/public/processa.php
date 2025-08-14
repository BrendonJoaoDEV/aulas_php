<?php
    function verificarPrimo($numero) {
        if ($numero > 1) {
            $primo = true;
            for ($i=$; $i < $numero; $i++) {
                if ($i % 2 == 0) {
                    $primo = false;
                    break;
                } else {
                    $primo = true;
                    continue;
                }
            }
            if ($primo) {
                return $numero;
            } else {
                return "Não primo";
            }
        } else {
            return "Zero";
        }
    }
?>