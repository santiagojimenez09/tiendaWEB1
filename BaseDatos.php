<?php

class BaseDatos{


public $usuarioBD="root";
public $passwordBD="";


public function __construct(){}


public function conectarBD(){

    try{

        $infoBD="mysql:host=localhost;dbname=tiendaweb";
        $conexionBD=new PDO($infoBD,$this->usuarioBD,$this->passwordBD);
        echo("exito conectando");
    }catch(PDOException $error){
        echo($error->getMessage());
    }






}





}





?>