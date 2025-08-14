<?php
    // 1° Quebrar frase em letras
    // 2° Varrer as letras e comparar com as vogais
    // 3° Retornar as contagens
    function contarVogais($string) {
        $string = str_split($string);
        $a = 0;
        $e = 0;
        $i = 0;
        $o = 0;
        $u = 0;

        foreach ($string as $letra) {
            switch ($letra) {
                case "a":
                    $a++;
                case "e":
                    $e++;
                case "i":
                    $i++;
                case "o":
                    $o++;
                case "u":
                    $u++;
            }
        }

        return [$a, $e, $i, $o, $u];
    }

    $string = $_POST["etr-string"];
?>