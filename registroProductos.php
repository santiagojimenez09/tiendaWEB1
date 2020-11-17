<?php

include("BaseDatos.php");

if(isset($_POST["botonRegistro"])){

    $nombreProducto = $_POST["nombre"];
    $marcaProducto = $_POST["marca"];
    $valorProducto = $_POST["valor"];
    $descripcionProducto = $_POST["descripcion"];

    




    $transaccion=new BaseDatos();
    
    $consultaSQL="INSERT INTO productos (nombreProducto,marcaProducto,valorProducto,descripcionProducto) VALUES ('$nombreProducto','$marcaProducto','$valorProducto','$descripcionProducto')";

    $transaccion->agregarDatos($consultaSQL);


}    




?>