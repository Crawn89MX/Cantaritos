<?php

    
    if(isset($resultado) && count($resultado) > 0)
    {
        $ordenes = array();
        foreach ($resultado as $res) {
            echo $res->toJson();
        }
        
    } 
    else
    {
        $salida.='<h2>No se encontraron ordenes</h2>';
    }

    
?>

