<?php
    function verificarNumero($numero) {

        if (isset($_POST['calcular'])) {

            if (is_numeric($_POST['numero'])) {
                return (int) $numero;
            }
        } else {
            return false;
        }
    }

    function exibirResultado($numero) {

        if (verificarNumero($numero)) {
            for ($i = 1; $i <= 10; $i++) {
                $resultado = $i * $numero;
                echo "$i × $numero = $resultado<br>";
            }
        } else {
            echo "Valor inválido!";
        }
    }
?>