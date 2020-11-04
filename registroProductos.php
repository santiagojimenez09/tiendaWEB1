<?php

include("BaseDatos.php");

if(isset($_POST["botonRegistro"])){

    $nombreProducto = $_POST["nombre"];
    $marcaProducto = $_POST["marca"];
    $valorProducto = $_POST["valor"];
    $descripcionProducto = $_POST["descripcion"];

    




    $transaccion=new BaseDatos();
    $transaccion->conectarBD();


}    




?>