<?php

    IF($_POST){
        $operador = $_POST["operacion"];
        $numero1 = $_POST["numero1"];
        $numero2 = $_POST["numero2"];

       

        if (is_numeric($numero1) && is_numeric($numero2)){
            $numero1 = strval($numero1);
            $numero2 = strval($numero2);
            
            if ($operador === 'suma'){
                
                $resultado = $numero1 + $numero2;
            }
            else{
                if($operador === 'resta')
                    $resultado = $numero1 - $numero2;
                else    
                    $resutado =  $numero1 * $numero2;
            }
    
            echo $resutado;
        }
        else 
            $resultado = "Uno de los dos valores no es un numero";


        echo $resultado;








       

    }