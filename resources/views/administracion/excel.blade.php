<?php
    include('conexion.php');

    session_start();
    error_reporting(0);

    $salida = "";
    $Consulta = "SELECT * FROM `orden_atendidas` ";
    $resultado = mysqli_query($conexion, $Consulta);
    if($resultado->num_rows > 0)
    {
        $ordenes = array();

        while ($fila = $resultado->fetch_assoc()) 
        {
            $ordeness[] = $fila;
        }
    } 

    else
    {
        $salida.='<h2>No se encontraron ordenes</h2>';
    }


    if(isset($_POST["export_data"])) 
    {

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
    }
?>

<div class="btn-group">
    <form action="PHP/ImportarExcel.php" method="POST">
        <button type="submit" id="export_data" name='export_data' value="Export to excel" class="btn btn-info">Exportar a Excel todos las ordenes</button>
    </form>
</div>
