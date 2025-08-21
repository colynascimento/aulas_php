<?php
    echo '<hr>';

    echo '<h1> Dois Alunos com 4 notas (usando array_sum e array_slice)</h1>';

    $alunos = [
        [
            'aluno' => 'Maria',
            'Nota1' => 10,
            'Nota2' => 9,
            'Nota3' => 8,
            'Nota4' => 10
        ],
        [
            'aluno' => 'João',
            'Nota1' => 7,
            'Nota2' => 8,
            'Nota3' => 6,
            'Nota4' => 9
        ]
    ];

    // Percorre cada aluno no array
    foreach ($alunos as $aluno) {
        // Captura o nome do aluno
        $nome = $aluno['nome'];

        // Extrai apenas as notas (ignorando a primeira chave, que é 'nome')
        $notas = array_slice($aluno, 1); // retorna um array com as 4 notas

        // Soma todas as notas
        $soma_notas = array_sum($notas);

        // Calcula a média das notas
        $media = $soma_notas / count($notas);

        // Exibe os dados do aluno
        echo '<h2>Aluno: ' $nome '</h2>';
        echo 'Notas: ' . implode(', ', $notas) . '<br>'; // junta as notas em uma string separada por vírgula
        echo 'Soma: ' $soma_notas '<br>';

        // Exibe a média com 2 casas decimais, vírgula como separador decimal e ponto como separador de milhar
        echo 'Média: ' . number_format($media, 2, ',', '.') . '<hr>';
    }
?>