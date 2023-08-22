<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="controlEjercicio5.php" method="post">

        Nombre: <input name="nombre" type="text" id="nombre" /> <br />
        Apellido: <input name="apellido" type="text" id="apellido" /> <br />
        Edad: <input name="edad" type="text" id="edad" /> <br />
        Direccion: <input name="direccion" type="text" id="direccion" /> <br />
        Seleccione el nivel de estudio: </br>
        1-No tiene estudios<input type="radio" name="nivelDeEstudio" id="opcion 1" value="No tengo estudios">
        2- Estudios primarios<input type="radio" name="nivelDeEstudio" id="opcion 2" value="Tengo estudios primarios">
        3- Estudios secundarios<input type="radio" name="nivelDeEstudio" id="opcion 3" value="Tengo estudios secundarios"> </br> </br>

        Seleccione su sexo: </br>
        <select name="Sexo">
        <option value="" selected></option>
        <option value="Mujer">Mujer</option>
        <option value="Hombre" selected>Hombre</option>
        <option value="No especificar">No especificar</option>
        </select>
        </br> </br>
        
        <input type="submit" name="Submit" value="Aceptar" />   

    </form>

    <?php
        echo "<h2>$datos</h2></br>";
        echo "<h2>$nivelDeEstudio</h2></br>";
        echo "<h2>$esMayor</h2>";
        echo "<h2>Sexo: $sexo</h2>"
    ?> 

</body>
</html>