<?php
    if($_POST){
        $numero = $_POST['numero'];
        
        if($numero === '0')   echo "el numero ingresado es cero";

        if (is_numeric($numero)){
            $numero = strval($numero);
            if ($numero === 0)  echo "el numero ingresado es cero";
            if ($numero<0)      echo "el numero $numero es negativo";
            if ($numero>0)      echo "el numero $numero es positivo";

            echo '<a href="ejercicio1.php"> Volver </a>';
        }
        else {
            echo "el valor no es un numero";
            echo '<a href="ejercicio1.php"> Volver </a>';
        }   

    }