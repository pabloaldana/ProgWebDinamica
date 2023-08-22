<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="cargaHoraria.php" method="get">

        <!-- Hora de Inicio: <input type="time" id="hora" name="horaIniLunes" disabled>
        Hora de Fin: <input type="time" id="hora" name="horaFinLunes"disabled>

        Hora de Inicio: <input type="time" id="hora" name="horaIniMartes"disabled>
        Hora de Fin: <input type="time" id="hora" name="horaFinMartes"disabled>

        Hora de Inicio: <input type="time" id="hora" name="horaIniMiercoles"disabled>
        Hora de Fin: <input type="time" id="hora" name="horaFinMiercoles"disabled> -->

        Jueves: <br/>
        Hora de Inicio: <input type="time" id="hora" name="horaIniJueves"> <br/>
        Hora de Fin: <input type="time" id="hora" name="horaFinJueves"> <br/>

        Viernes: <br/>
        Hora de Inicio: <input type="time" id="hora" name="horaIniViernes">  <br/>
        Hora de Fin: <input type="time" id="hora" name="horaFinViernes"> <br/>

        <input type="submit" value="Enviar">

    </form>

    <?php
    // Incluir el resultado de cargaHoraria.php si está seteado
    // if (isset($cargaHorariaResult)) {
        echo "<p>$cargaHorariaResult</p>";
    // }
    ?>
</body>
</html>