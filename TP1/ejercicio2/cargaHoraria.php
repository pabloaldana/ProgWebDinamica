<?php

    if ($_GET){

        // echo "entre al cargahoraria.php";

        $horaIniJueves = $_GET['horaIniJueves'];
        $horaFinJueves = $_GET['horaFinJueves'];
        $horaIniViernes = $_GET['horaIniViernes'];
        $horaFinViernes = $_GET ['horaFinViernes'];

        // echo $horaFinJueves;

        $dia1 = new stdClass(); //aca creo un objeto del dia jueves
        $dia1->nombre = "Jueves";
        $dia1->horarioInicio = $horaIniJueves;
        $dia1->horarioFin = $horaFinJueves;

        // echo $dia1->nombre;

        $dia2 = new stdClass();//aca creo un objeto del dia viernes
        $dia2->nombre = "Viernes";
        $dia2->horarioInicio = $horaIniViernes;
        $dia2->horarioFin = $horaFinViernes;

        $arreglo = array ($dia1,$dia2);


        $horaIniJueves = strtotime($horaIniJueves); //strtotime devuelve la cantidad de segundos desde medianoche
        $horaFinJueves = strtotime($horaFinJueves);

        $horaIniViernes = strtotime($horaIniViernes);
        $horaFinViernes = strtotime($horaFinViernes);


        $diferenciaSegundos = ($horaFinJueves - $horaIniJueves)+($horaFinViernes-$horaIniViernes);
        $diferenciaHoras = floor($diferenciaSegundos / 3600); //lo paso a horas

        
        $cargaHorariaResult = "La carga horaria es de $diferenciaHoras";
        include 'ejercicio2.php'; // aca pongo para poder mostrar los resultados en la vista que seria ejercicio2.php

        //esto funciona pero quiero q me muestre  en ejercicio2.php
    }

    ?>