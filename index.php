<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sequencia de fibonacci</title>
    </head>
    <body>
        <form action="fibonacci.php" method="POST">
            <fieldset>
                <legend>Sequência de Fibonacci</legend>
                <p>
                    <label>Digite a quantidade de número que deseja obter:</label>
                    <input type="number" id="qntd" name="qntd" step="1" min="1" required/>
                </p>
                <input type="submit" value="Enviar"/>
            </fieldset>
        </form>
    </body>
</html>
