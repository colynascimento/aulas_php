<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <body>

        <header>
            <h1>Mudando o Case: array_change_key_case()</h1>
        </header>

        <main>
            <?php
                echo '<hr>';

                echo '<h2> 4 - Array_change_key_case';

                // Criação de um array com chaves em cases variados
                $array = [
                    'nome' => 'Maria',
                    'idade' => 40,
                    'peso' => 50.5
                ];

                // Exibe o array original
                echo '<pre>';
                print_r($array);
                echo '</pre>';

                // Converte todas as chaves do array para minúsculas (CASE_LOWER)
                $indice_minusculo = array_change_key_case($array, CASE_LOWER);

                // Exibe o array com chaves em minúsculas
                echo '<pre>';
                echo 'Índice Minúsculo: <br>';
                print_r($indice_minusculo);
                echo '</pre>';

                // Converte todas as chaves do array para maiúsculas (CASE_UPPER)
                $indice_maiusculo = array_change_key_case($array, CASE_UPPER);

                // Exibe o array com chaves em maiúsculas
                echo '<pre>';
                echo 'Índice Maiúsculo: <br>';
                print_r($indice_maiusculo);
                echo '</pre>';
            ?>
        </main>

    </body>
</html>