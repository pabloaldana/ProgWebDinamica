<?php

    if($_POST){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $edad = $_POST['edad'];
        $direccion = $_POST['direccion'];
        $nivelDeEstudio = $_POST['nivelDeEstudio'];
        $sexo = $_POST['Sexo'];        

        $edad = strval($edad);
        
        if (is_numeric($edad)){

            
            if($edad>= '18'){
           
                $esMayor="Es mayor de edad";

            } 
            else {
                $esMayor="No es mayor de edad";
            }   
        }
        else $esMayor= "el dato ingresado no es una edad";

        $datos = "Hola, yo soy $nombre , $apellido tengo $edad años y vivo en $direccion";
        

        include 'ejercicio5.php';
    }