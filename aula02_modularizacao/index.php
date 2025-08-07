<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>

        <h1>Envie sua mensagem</h1>

        <!-- 
            Formulário para o usuário digitar e enviar dados.
            - method="POST" indica que os dados serão enviados "por trás" (sem aparecer na URL).
            - action="processa.php" diz que os dados serão enviados para a página chamada processa.php
        -->
        <form class="caixa" method="POST" action="processa.php">

            <label>Digite sua mensagem:</label><br>

            <!-- 
                - name="mensagem" éo nome do campo, usado para recuperar o valor no PHP.
                - required significa que o campo é obrigatório.
            -->
            <input type="text" name="mensagem" required>
            <button type="submit">Enviar</button>

        </form>

    </body>
</html>