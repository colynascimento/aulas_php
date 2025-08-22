<!-- Contador de Vogais em uma Frase 
Desenvolva um programa que conte quantas vogais existem em uma frase digitada pelo usuário.

    - Crie uma função que receba a string e retorne a contagem de cada vogal.
    - Use laços de repetição para percorrer a string.
    - Exiba ao final quantas vezes cada vogal aparece.
-->
<?php
    include 'public/process.php';

    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $array_input = str_split($_POST['frase']);

        print_r($array_input);
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contador de Vogais</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <body>

    <header>
        <h1>Contador de Vogais</h1>
    </header>

    <main>
        <section>
            <form method='POST'>
                <label for='frase'>Digite uma frase:</label>
                <input type='text' name='frase' id='frase' required>

                <div><input type="submit" value="Enviar" name='enviar'></div>
            </form>
        </section>

        <section id='resultado-contador'>

        </section>
    </main>
    
    </body>
</html>

- posso transformar a frase em um array, sendo cada caracter um elemento
- e percorrer o array que incrementa contador