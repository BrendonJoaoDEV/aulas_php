<?php
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
                    break;
                case "e":
                    $e++;
                    break;
                case "i":
                    $i++;
                    break;
                case "o":
                    $o++;
                    break;
                case "u":
                    $u++;
                    break;
            }
        }

        return ["a" => $a, "e" => $e, "i" =>$i, "o" => $o, "u" => $u];
    }

    if (isset($_POST["etr-string"])) {
        $string = (string) htmlspecialchars($_POST["etr-string"]);
    }
?>