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
    
    <?php


    $v1 = $_POST['n1'];
    $v2 = $_POST['n2'];
    $v3 = $_POST['calc'];

  
    if($v3 == "soma"){
        echo "<br>";
        soma($v1, $v2);
        echo "<br>";
    }elseif ($v3 == "subtracao") {
        echo "<br>";
        subtracao($v1, $v2);
        echo "<br>";
    }elseif ($v3 == "multiplica") {
        echo "<br>";
        multiplica($v1, $v2);
        echo "<br>";
    }elseif ($v3 == "divide") {
        echo "<br>";
        divide($v1, $v2);
        echo "<br>";
}  
  

function soma($v1, $v2){
    $total = $v1 + $v2;    
    echo "Resultado: " .$v1  ."+"  .$v2 ." = " .$total;
}

function subtracao($v1, $v2){
    $total = $v1 - $v2;    
    echo "Resultado: " .$v1  ."-"  .$v2 ." = " .$total;
}

function multiplica($v1, $v2){
    $total = $v1 * $v2;    
    echo "Resultado: " .$v1  ."*"  .$v2 ." = " .$total;
}

function divide($v1, $v2){
    $total = $v1 / $v2;    
    echo "Resultado: " .$v1  ."/"  .$v2 ." = " .$total;
}


    ?>

<br>
    <a href="index.php"><br/> Calcular novamente</a> 
    
</body>
</html>