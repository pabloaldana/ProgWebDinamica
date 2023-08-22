<?php

    if ($_POST){
        
        $deportesSeleccionados = $_POST['deportes'];

        $cantDeportes = count($deportesSeleccionados);

        echo $cantDeportes;

        // el echo tendria q mostrarlo en una nueva pagina de vista

    }