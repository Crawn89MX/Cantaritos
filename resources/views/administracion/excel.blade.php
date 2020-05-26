<?php

    
    if(isset($resultado) && count($resultado) > 0)
    {
        $ordenes = array();
        foreach ($resultado as $res) {
            $ordenes[] = $res->toArray();
        }
        
    } 
    else
    {
        $salida.='<h2>No se encontraron ordenes</h2>';
    }

    if(!empty($ordenes)) 
    {

        $filename = "libros.xls";

        header("Content-Type:application/vnd.ms-excel; charset=utf-8");
        header("Content-Disposition: attachment; filename=".$filename);

        $mostrar_columnas = false;

        foreach($ordenes as $orden) 
        {
            if(!$mostrar_columnas) 
            {
                echo implode("\t", array_keys($orden)) . "\n";
                $mostrar_columnas = true;
            }
            echo implode("\t", array_values($orden)) . "\n";
        }
    }

    else
    {
        echo 'No hay datos a exportar';
    }
    exit;
?>

