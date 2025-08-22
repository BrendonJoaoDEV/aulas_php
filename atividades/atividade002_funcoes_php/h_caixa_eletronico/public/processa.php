<?php
    function distribuirCedulas($valorSaque) {
        $cedulas = [100 => 0, 50 => 0, 20 => 0, 10 => 0, 5 => 0];
        $cedulasDisponiveis = [100, 50, 20, 10, 5];
        $restante = $valorSaque;
        foreach ($cedulasDisponiveis as $cedula) {
            while ($restante >= $cedula) {
                if ($restante >= $cedula) {
                    $restante -= $cedula;
                    $cedulas[$cedula]++;
                }
            }
        }
        if ($restante != 0) {
            return "Erro: Impossível sacar $valorSaque, não há notas no caixa para formar esse valor!";
        } else {
            return $cedulas;
        }
    }

    if (isset($_POST['etr-saque'])) {
        $cedulas = distribuirCedulas((int) $_POST['etr-saque']);
    }
?>