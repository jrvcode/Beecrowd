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
    <form action="" method="post">
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

    if($_POST){
        $v1 = $_POST['n1'];
        $v2 = $_POST['n2'];
        $v3 = $_POST['calc'];
    
      
        if($v3 == "soma"){
            echo "<br>";
            echo "Total: ";
            soma($v1, $v2);
            echo "<br>";
        }elseif ($v3 == "subtracao") {
            echo "<br>";
            echo "Total: ";
            subtracao($v1, $v2);
            echo "<br>";
        }elseif ($v3 == "multiplica") {
            echo "<br>";
            echo "Total: ";
            multiplica($v1, $v2);
            echo "<br>";
        }elseif ($v3 == "divide") {
            echo "<br>";
            echo "Total: ";
            divide($v1, $v2);
            echo "<br>";
    }  
}  

    function soma($v1, $v2){
        echo ($v1 + $v2);
    }

    function subtracao($v1, $v2){
        echo ($v1 - $v2);
    }

    function multiplica($v1, $v2){
        echo ($v1 * $v2);
    }

    function divide($v1, $v2){
        echo ($v1 / $v2);
    }

    ?>
    
</body>
</html>