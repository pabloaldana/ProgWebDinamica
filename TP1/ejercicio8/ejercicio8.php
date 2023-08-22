<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calcularValor.php" method="pos">

        Edad: <input type="number" name="edad" id="edad"> </br>
        1-Soy estudiante<input type="radio" name="estudiante" id="" value="soy estudiante">
        2-No soy estudiante<input type="radio" name="estudiante" id="" value= "no soy estudiante">
        </br></br>

        <input type="submit" value="Calcular">
        <input type="reset" value="Limpiar">

    </form>
    

    <?php
        echo "<h2>El Precio es: $precio </h2>";    
    ?>



</body>
</html>