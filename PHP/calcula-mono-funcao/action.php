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

    <?php

        $v1 = $_POST['n1'];
        $v2 = $_POST['n2'];
        $v3 = $_POST['calc'];
        calcular($v1, $v2, $v3);        
      

    function calcular($v1, $v2, $v3){
        if($v3 == "+"){
        $total = $v1 + $v2;    
        echo "<br>";
        echo "Resultado: " .$v1  .$v3  .$v2 ." = " .$total;
        echo "<br>";
    }elseif ($v3 == "-") {
        $total = $v1 - $v2;
        echo "<br>";
        echo "Resultado: " .$v1  .$v3  .$v2 ." = " .$total;        
        echo "<br>";
    }elseif ($v3 == "*") {
        $total = $v1 * $v2;
        echo "<br>";
        echo "Resultado: " .$v1  .$v3  .$v2 ." = " .$total;
        echo "<br>";
    }elseif ($v3 == "/") {
        $total = $v1 / $v2;
        echo "<br>";
        echo "Resultado: " .$v1  .$v3  .$v2 ." = " .$total;
        echo "<br>";
    }    
    }


    ?>
    <br>
    <a href="index.php"><br/> Calcular novamente</a> 
    
</body>
</html>