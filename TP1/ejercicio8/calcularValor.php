<?php

//  Si es estudiante o menor de 12 años el precio es de $160, si es estudiante 
//  y mayor o igual de 12 años el precio es de $180, en cualquier otro caso 
//  el precio es de $300.

    if($_POST){
        $edad = $_POST["edad"];
        $estudiante = $_POST["estudiante"];

        if ($edad<12 || $estudiante==="soy estudiante"){
           $precio ="$160";
        }
        else{
            if ($edad>=12 && $estudiante="soy estudiante")
                $precio = "$180";
            else
                $precio = "$300";
        }

        include 'ejercicio8.php';

    }