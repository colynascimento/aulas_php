<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de alunos</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <body>

        <header>
            <h1>Cadastro de Aluno</h1>
        </header>

        <form method='POST'>
            <label>Nome do Aluno</label><br>

            <input type='text' name='nome' required><br>

            <label>Nota 1:</label><br>
            <input type='number' name='nota1' step='0.01' required><br>

            <label>Nota 2:</label><br>
            <input type='number' name='nota2' step='0.01' required><br>

            <label>Nota 3:</label><br>
            <input type='number' name='nota3' step='0.01' required><br>

            <label>Nota 4:</label><br>
            <input type='number' name='nota4' step='0.01' required><br>

            <input type='submit' value='Cadastrar'>
        </form>

        <?php
            // Verifica se o formulário foi enviado via método POST
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Cria um array associativo $aluno com os dados recebidos do formulário
                $aluno = [
                    'nome' => $_POST['nome'],
                    'Nota1' => (float) $_POST['nota1'],
                    'Nota2' => (float) $_POST['nota2'],
                    'Nota3' => (float) $_POST['nota3'],
                    'Nota4' => (float) $_POST['nota4']
                ];

            echo '<hr>';

            echo '<h2> Resultado:</h2>';

            // Exibe o nome do aluno, usando htmlspecialchars para evitar problemas de segurança
            echo '<h3>Aluno: ' . htmlspecialchars($aluno['nome']) . '</h3>';

            // Inicializa as variáveis para soma das notas e contagem das quantidades
            $soma_notas = 0;
            $qtd_notas = 0;

                // Loop que percorre cada elemento do array $aluno
                foreach($aluno as $chave => $valor) {
                    // Verifica se a chave NÃO É 'nome' e se o valor é numérico (nota)
                    if ($chave !== 'nome' && is_numeric($valor)) {
                        // Exibe o nome da nota e o valor digitado
                        echo $chave, ': ', $valor, '<br>';

                        // Soma o valor da nota à variável $soma_notas
                        $soma_notas += $valor;

                        // Incrementa a quantidade de notas contadas
                        $qtd_notas++;
                    }
                }

                // Calcula a média das notas dividindo a soma pela quantidade
                $media = $soma_notas / $qtd_notas;

                // Exibe a soma das notas
                echo '<br><strong>Soma das Notas: </strong>', $soma_notas, '<br>';

                // Exibe a média formatada com 2 casas decimais e vírgula como separador decimal
                echo "<strong>Média: </strong>" . number_format($media, 2, ',', '.');
            }
        ?>

    </body>
</html>