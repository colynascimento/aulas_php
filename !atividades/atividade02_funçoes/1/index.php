<!-- 1. Tabela de Tabuada
Desenvolva um programa em PHP que exiba a tabuada completa de 1 a 10.

    - Crie uma função que receba um número e exiba a tabuada desse número.
    - Use um laço de repetição externo para percorrer os números de 1 a 10, 
    chamando a função para cada número.
    - Utilize estruturas de repetição aninhadas. -->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tabuada</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        
        <header>
            <h1> Tabela da Tabuada</h1>
        </header>

        <main>
            <form method="POST">
                <label for="numero">Insira um número:</label>
                <input type="number" id="numero" name="numero" required>
                <div><button type="submit" name="calcular">Calcular</button></div>
            </form>

            <section>
                <?php
                    include "public/processa.php";

                    $numero = $_POST['numero'] ?? null;

                    if ($numero !== null) {
                        exibirResultado($numero);
                    };
                ?>
            </section>
        </main>
    </body>
</html>