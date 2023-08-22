<?php

    if($_POST){
        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];

        $datos = "Hola, yo soy $nombre , $apellido tengo $edad años y vivo en $direccion";

        //echo $datos;

        include 'ejercicio3.php';

    }


    // if($_GET){
    //     $nombre = $_GET['nombre'];
    //     $apellido = $_GET['apellido'];
    //     $edad = $_GET['edad'];
    //     $direccion = $_GET['direccion'];

    //     $datos = "Hola, yo soy $nombre , $apellido tengo $edad años y vivo en $direccion";

    //     echo $datos;
    // }


    //! LA DIFERENCIA ES QUE CON EL METODO POST LOS VALORES PASADOS EN EL FORMULARIO
    //! NO SE MUESTRAN LA DIRECCION WEB, EN CAMBIO EN GET ME MUESTRA LOS VALORES