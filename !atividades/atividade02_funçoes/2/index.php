<!-- Sistema de Notas de Alunos
Crie um programa que leia o nome de um aluno e quatro notas.

    - Crie uma função que calcule a média e retorne se o aluno está
     Aprovado, em Recuperação ou Reprovado.
    - Use estruturas condicionais para determinar o resultado.
    - Permita que o programa cadastre vários alunos, mostrando o resultado 
    individual de cada um.
 -->

 <!DOCTYPE html>
 <html lang="pt-br">
    <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Sistema de Notas dos Alunos</title>
       <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
       
        <header>
            <h1>Sistema de Notas</h1>
        </header>

        <main>
            <section>
                <form method="POST">
                    <label for="nome">Nome do aluno:</label>
                    <input type="text" name="nome" id="nome" required>

                    <label for="nota1">1º Bimestre:</label>
                    <input type="number" name="nota1" id="nota1" required>

                    <label for="nota2">2º Bimestre:</label>
                    <input type="number" name="nota2" id="nota2" required>

                    <label for="nota3">3º Bimestre:</label>
                    <input type="number" name="nota3" id="nota3" required>

                    <label for="nota4">4º Bimestre:</label>
                    <input type="number" name="nota4" id="nota4" required>

                    <div><button type="submit" name="inserir">Inserir Aluno</button></div>
                </form>
            </section>

            <section>
                <table>
                    <thead>
                        <th scope="col">Nome</th>
                        <th scope="col">Média</th>
                        <th scope="col">Situação</th>
                    </thead>
                    <tbody>
                        <tr name="mensagem-vazia">
                            <td>Não há alunos cadastrados</td>
                        </tr>

                        <?php
                            include "public/process.php";

                            if (isset($_POST['inserir'])) {

                            }
                        ?>
                    </tbody>
                </table>
            </section>
        </main>

        <script src="public/js/script.js"></script>
    </body>
 </html>