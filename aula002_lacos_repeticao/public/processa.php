<?php
// Função com FOR
function exibirFor() {
    for ($i = 1; $i <= 5; $i++) {
        echo "Contagem com FOR: $i<br>";
    }
}

// Função com WHILE
function exibirWhile() {
    $i = 1;
    while ($i <= 5) {
        echo "Contagem com WHILE: $i<br>";
        $i++;
    }
}

// Função com FOREACH
function exibirForeach() {
    $frutas = ["Maçã", "Banana", "Laranja", "Uva"];
    foreach ($frutas as $fruta) {
        echo "Fruta: $fruta<br>";
    }
}
?>