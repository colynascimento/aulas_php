<?php
    session_start();

    // Inicializa o array de alunos na sessão, se ainda não existir
    if (!isset($_SESSION['alunos'])) {
        $_SESSION['alunos'] = [];
    }

    // Se o botão "Limpar Lista" for clicado
    if (isset($_POST['limpar'])) {
        session_destroy();
        session_start(); // reinicia a sessão após destruir
        $_SESSION['alunos'] = []; // reinicializa o array
    }

    // Se o formulário for enviado para adicionar aluno
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !isset($_POST['limpar'])) {
        // Cria um novo aluno a partir dos dados enviados
        $novo_aluno = {
            'nome' => $_POST['nome'],
            'Nota1' => (float) $_POST['nota1'],
            'Nota2' => (float) $_POST['nota2'],
            'Nota3' => (float) $_POST['nota3'],
            'Nota4' => (float) $_POST['nota4']
        };

        // Adiciona à lista na sessão
        $_SESSION['alunos'][] = $novo_aluno;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Alunos (com Session)</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <body>

        <header>
            <h1>Cadastro de Aluno (com Session)</h1>
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
        
        <form method='POST' style='margin-top: 20px;'>
            <input type='hidden' name='limpar' value='1'>
            <input type='submit' value='limpar Lista de Alunos'>
        </form>

        <?php if (!empty($_SESSION['alunos'])): ?>
            <hr>
            <h2>Lista de Alunos Cadastrados</h2>

            <?php foreach ($_SESSION['alunos'] as $aluno): ?>
            <h3><?= htmlspecialchars($aluno['nome']) ?></h3>

            <ul>
                <li>Nota 1: <?=$aluno['Nota1'] ?></li>
                <li>Nota 2: <?=$aluno['Nota2'] ?></li>
                <li>Nota 3: <?=$aluno['Nota3'] ?></li>
                <li>Nota 4: <?=$aluno['Nota4'] ?></li>
                <?php
                    $soma = $aluno['Nota1'] + $aluno['Nota2'] + $aluno['Nota3'] + $aluno['Nota4'];
                    $media = $soma / 4;
                ?>
                <li><strong>Soma:</strong> <?= $soma ?></li>
                <li><strong>Média:</strong> <?= number_format($media, 2 ',', '.') ?></li>
            </ul>
            <hr>
        <?php endforeach; ?>
    <?php endif; ?>
    
    </body>
</html>