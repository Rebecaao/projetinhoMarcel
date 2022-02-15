



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Par E Impar</title>
    <link rel="stylesheet" href="../css/mainParEImpar.css">
</head>
<body>
    <h3>Par e impar</h3>
    <hr>
    <br><br>

    <div class="container">


    <label for="">Nº inicial</label>
    <select name="primeiroNumero" id="">
    <option value="">selecione um numero inicial</option>
    <?php

    //declarando valores denro do select
    $inicio = (int) 0;
    while($inicio <= 500){
    echo "<option value='".$inicio."'>".$inicio."</option>";
    $inicio = $inicio +1;
    }
    ?>
        </select>
        <br>

    <label for="">N°</label>
    <select name="segundoNumero" id="" value="<$inicio>">
    <option value="">selecione um numero final</option>
    <?php

    //declarando valores denro do select
    $fim;
    while($fim <= 1000){
    echo "<option value='".$fim."'>".$fim."</option>";
    $fim = $fim +1;
    }
    ?>
    </select>


    </div>
</body>
</html>