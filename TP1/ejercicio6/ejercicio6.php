<!-- 
/**
 * *Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
 * *deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
 * *que procesa el formulario la cantidad de deportes que practica.
 */ -->
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <form action="contarActividades.php" method="post">

            <!-- Nombre: <input name="nombre" type="text" id="nombre" /> <br />
            Apellido: <input name="apellido" type="text" id="apellido" /> <br />
            Edad: <input name="edad" type="text" id="edad" /> <br />
            Direccion: <input name="direccion" type="text" id="direccion" /> <br /> -->
            Seleccione los deportes que realiza: </br>
            1- Futbol<input type="checkbox" name="deportes[]" id="opcion 1" value="Futbol">
            2- Tennis<input type="checkbox" name="deportes[]" id="opcion 2" value="Tennis">
            3- Basket<input type="checkbox" name="deportes[]" id="opcion 3" value="Basket"> 
            4- Voley <input type="checkbox" name="deportes[]" id="opcion 3" value="Voley"> </br> </br>

            <!-- Seleccione su sexo: </br>
            <select name="Sexo">
            <option value="" selected></option>
            <option value="Mujer">Mujer</option>
            <option value="Hombre" selected>Hombre</option>
            <option value="No especificar">No especificar</option>
            </select>
            </br> </br> -->
            
            <input type="submit" name="Submit" value="Aceptar" />  
        </form>
    </body>
    </html>

    