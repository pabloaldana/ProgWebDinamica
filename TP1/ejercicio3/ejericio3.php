<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="mostrarDatos.php" method="post">

        Nombre: <input name="nombre" type="text" id="nombre" /> <br />
        Apellido: <input name="apellido" type="text" id="apellido" /> <br />
        Edad: <input name="edad" type="text" id="edad" /> <br />
        Direccion: <input name="direccion" type="text" id="direccion" /> <br />
        <input type="submit" name="Submit" value="Aceptar" />   

    </form>

    <!-- <form action="mostrarDatos.php" method="get">

        Nombre: <input name="nombre" type="text" id="nombre" /> <br />
        Apellido: <input name="apellido" type="text" id="apellido" /> <br />
        Edad: <input name="edad" type="text" id="edad" /> <br />
        Direccion: <input name="direccion" type="text" id="direccion" /> <br />
        <input type="submit" name="Submit" value="Aceptar" />   

    </form> -->
    <?php
        echo "<h2>$datos</h2>"
    ?>

</body>
</html>