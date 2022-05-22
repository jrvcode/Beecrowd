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
    <form action="" method="post">
        Valor: <input type="number" name="n1"><br><br>
        <input type="submit" value="Calcular"><br><br>
    </form>

    <?php

    if($_POST){
        $v1 = $_POST['n1'];
        
        for ($cont=0; $cont < 11; $cont++) { 
            $total = $v1 * $cont;
            echo "Taboada: " .$v1 ." * " .$cont ." = " .$total ."<br>";
        }
    }
      

    ?>
    
</body>
</html>