<?php


    if($_GET){
        $nombre = $_GET['nombre'];
        $apellido = $_GET['apellido'];
        $edad = $_GET['edad'];
        $direccion = $_GET['direccion'];

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

        include 'ejercicio4.php';

    }

    //!se modifica el valor  en la vista ,si lo cambio algun valor en la barra de direcciones