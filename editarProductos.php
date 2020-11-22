<?php

include("BaseDatos.php");


$id=$_GET["id"];


if(isset($_POST["botonEditar"])){

$nombreProducto= $_POST["nombreEditar"];
$marcaProducto= $_POST["marcaEditar"];
$valorProducto = $_POST["valorEditar"];
$descripcionProducto= $_POST["descripcionEditar"];


$transaccion=new BaseDatos();

$consultaSQL="UPDATE productos SET nombreProducto='$nombreProducto',marcaProducto='$marcaProducto',valorProducto='$valorProducto',descripcionProducto='$descripcionProducto' WHERE idProducto='$id'";

$transaccion->editarDatos($consultaSQL);

header("location:productosBodega.php");




}






?>