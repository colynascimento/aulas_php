<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
    <body>

        <header>
            <h1>Calculadora: Operadores Aritméticos</h1>
        </header>

        <main>
            <?php
                if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['operacao'])) {
                    $numero1 = (int) htmlspecialchars($_POST['numero1']);
                    $numero2 = (int) htmlspecialchars($_POST['numero2']);
                    $operacao = htmlspecialchars($_POST['operacao']);
                    $resultado = null;

                    if ($operacao === "soma") {
                        $resultado = $numero1 + $numero2;
                    } elseif ($operacao === "subtracao") {
                        $resultado = $numero1 - $numero2;
                    } elseif ($operacao === "multiplicacao") {
                        $resultado = $numero1 * $numero2;
                    } elseif ($operacao === "divisao") {
                        $resultado = $numero1 / $numero2;
                    } else {
                        // não sei o que botar aqui aaa
                    }

                    echo "O resultado é de <strong>$numero1 + $numero2 = $resultado</strong>";

                } else {
                    echo "Nenhuma mensagem recebida.";
                }
            ?>
            
            <br>
            <a href="index.html">Fazer outro cálculo</a>
        </main>

    </body>
</html>