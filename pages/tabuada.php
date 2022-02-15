<?php
    //criando variaveis

    $tabuada = (int) 0;
    $contador = (int) 0;
    
    if(isset(($_POST['btncalc'])){
     
    $tabuada = $_POST['txt1'];
    $contador = $_POST['txt2';

    for($contador = 0; $contador =< 10; $contador++){
        echo "$tabuada x $contador" = ($contador * $tabuada) 
    }
    }

?>



<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="../css/mainTabuada">
 
</head>
<body>
    <div  id="form">
        <form name="frmMedia" method="post" action="tabuada.php">
            <div class="container">
        <h3>Tabuada</h3>
        <hr>
        <br>

        <div>
            <label for="tabuada">Tabuada</label>
            <input type="text" name="txtn1" value="">
        </div>

        <br><br>

        <div>
            <label for="contador">Contador</label>
            <input type="text" name="txtn2" value="">
        </div>
        <br><br>
        <div id="button">
             <input type="submit" name="btncalc" value ="Calcular" >
 
        <div id="resultado"></div>
        </form>
        </div>
    </div>
</body>
</html>
