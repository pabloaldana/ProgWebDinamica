<?php

    if ($_POST) {
        $titulo = $_POST["titulo"];
        $actores = $_POST["actores"];
        $director = $_POST["director"];
        $guion = $_POST["guion"];
        $produccion = $_POST["produccion"];
        $anio = $_POST["anio"];
        $nacionalidad = $_POST["nacionalidad"];
        $nacionalidad2 = $_POST["nacionalidad2"];
        $duracion = $_POST["duracion"];
        $sinopsis = $_POST["sinopsis"]

        



        include '../Vista/salida.php';
    }