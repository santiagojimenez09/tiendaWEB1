<?php

include("BaseDatos.php");

if(isset($_POST["botonRegistro"])){

    $nombreProducto = $_POST["nombre"];
    $marcaProducto = $_POST["marca"];
    $valorProducto = $_POST["valor"];
    $descripcionProducto = $_POST["descripcion"];
    $fotoProducto = $_POST["foto"];

    




    $transaccion=new BaseDatos();
    
    $consultaSQL="INSERT INTO productos (nombreProducto,marcaProducto,valorProducto,descripcionProducto,fotoProducto) VALUES ('$nombreProducto','$marcaProducto','$valorProducto','$descripcionProducto','$fotoProducto')";

    $transaccion->agregarDatos($consultaSQL);

    header("location:formularioProductos.php");


}    




?>