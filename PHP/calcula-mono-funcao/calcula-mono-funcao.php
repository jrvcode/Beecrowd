<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular</title>
</head>
<body>

    <h1>Calcular em 1 Function</h1>
    <form action="" method="post">
        Valor 1: <input type="number" name="n1"><br>
        Valor 2: <input type="number" name="n2"><br><br>
        Função: <select id="funcoes" name="calc">
            <option value="+">+ soma</option>
            <option value="-">- subtração</option>
            <option value="*">* multiplica</option>
            <option value="/">/ divide</option>
        </select>
        <input type="submit" value="Calcular">
    </form>

    <?php

    if($_POST){
        $v1 = $_POST['n1'];
        $v2 = $_POST['n2'];
        $v3 = $_POST['calc'];
        calcular($v1, $v2, $v3);        
    }
      

    function calcular($v1, $v2, $v3){
        if($v3 == "+"){
        $total = $v1 + $v2;    
        echo "<br>";
        echo "Total: " .$total;
        echo "<br>";
    }elseif ($v3 == "-") {
        $total = $v1 - $v2;
        echo "<br>";
        echo "Total: " .$total;        
        echo "<br>";
    }elseif ($v3 == "*") {
        $total = $v1 * $v2;
        echo "<br>";
        echo "Total: " .$total;
        echo "<br>";
    }elseif ($v3 == "/") {
        $total = $v1 / $v2;
        echo "<br>";
        echo "Total: " .$total;
        echo "<br>";
    }    
    }


    ?>
    
</body>
</html>