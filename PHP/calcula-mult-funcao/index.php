<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>

    <h1>Calcular em Várias Functions</h1>
    <form method="post" action="action.php">
        Valor 1: <input type="number" name="n1"><br>
        Valor 2: <input type="number" name="n2"><br><br>
        Função: <select id="funcoes" name="calc">
            <option value="soma" selected>+ soma</option>
            <option value="subtracao">- subtração</option>
            <option value="multiplica">* multiplica</option>
            <option value="divide">/ divide</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

    <?php

    

    ?>
    
</body>
</html>