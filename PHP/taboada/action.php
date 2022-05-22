<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taboada</title>
</head>
<body>

    <h1>TABOADA</h1>

    <?php

        $v1 = $_POST['n1'];
        echo "TABOADA COM FOR";
        echo "<br>";
        calcTaboada1($v1);
        echo "<br>";
        echo "TABOADA COM WHILE";
        echo "<br>";
        calcTaboada2($v1);

        function calcTaboada1($v1){
            for ($cont=0; $cont < 11; $cont++) { 
                $total = $v1 * $cont;
                echo "Taboada: " .$v1 ." * " .$cont ." = " .$total ."<br>";
            }
        }  

        function calcTaboada2($v1){
            $cont=0;
            while ($cont <= 10) {
                $total = $v1 * $cont;
                echo "Taboada: " .$v1 ." * " .$cont ." = " .$total ."<br>";
                $cont++;
            }
        }  
    ?>

<br>
    <a href="index.php"><br/>Calcular novamente</a> 
    
</body>
</html>