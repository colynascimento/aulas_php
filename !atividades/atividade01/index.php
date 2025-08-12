<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="css/style.css">
</head>
    <body>
        <header>
            <h1>Calculadora: Operadores Aritméticos</h1>
        </header>

        <main>
            <form class="container-principal" method="POST" action="resultado.php">
                <label for="numero1">Digite o primeiro número:</label>
                <input type="number" id="numero1" name="numero1" required>
                
                <label for="numero2">Digite o segundo número:</label>
                <input type="number" id="numero2" name="numero2" required>
                
                <label for="operacao">Escolha a operação:</label>
                <select name="operacao">
                    <option value="" disabled selected>-- Selecione --</option>
                    <option value="soma">Soma (+)</option>
                    <option value="subtracao">Subtração (-)</option>
                    <option value="multiplicacao">Multiplicação (×)</option>
                    <option value="divisao">Divisão (÷)</option>
                </select>

                <div id="container-btn">
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </main>

    </body>
</html>