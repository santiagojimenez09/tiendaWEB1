<?php

class BaseDatos{


    public $usuarioBD="root";
    public $passwordBD="";


    public function __construct(){}


    public function conectarBD(){

        try{

            $infoBD="mysql:host=localhost;dbname=tiendaweb";
            $conexionBD=new PDO($infoBD,$this->usuarioBD,$this->passwordBD);
            return($conexionBD);

        }catch(PDOException $error){
            echo($error->getMessage());
        }






    }

    public function agregarDatos($consultaSQL){
 
        $conexionBD=$this->conectarBD();

        $consultaInsertarDatos=$conexionBD->prepare($consultaSQL);
        
        $resultado=$consultaInsertarDatos->execute();

        if($resultado){
            echo("Registro agregado con exito");
        }else{
            echo("Error agregando el registro");
        }


    }

    public function consultarDatos($consultaSQL){
        
        $conexionBD=$this->conectarBD();
        
        $consultaBuscarDatos=$conexionBD->prepare($consultaSQL);

        $consultaBuscarDatos->setFetchMode(PDO::FETCH_ASSOC);

        $consultaBuscarDatos->execute();

        return($consultaBuscarDatos->fetchAll());
    }
    
    public function eliminarDatos($consultaSQL){
 
        $conexionBD=$this->conectarBD();

        $consultaEliminarDatos=$conexionBD->prepare($consultaSQL);
        
        $resultado=$consultaEliminarDatos->execute();

        if($resultado){
            echo("Registro eliminado con exito");
        }else{
            echo("Error eliminado el registro");
        }


    }

}





?>