<?php

require("configDb.php");//llamas la configuracion establecida

class Conexion{

    public $conexionDB;

    public function __construct()
    {
        $this -> conexionDB =new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);

        //condicional para validar si la conexion fue o no exitosa
        if ($this ->conexionDB -> connect_errno) {
            echo "Error de conexión en la base de datos".$this->conexionDB->connect_errno;
        }
        $this->conexionDB ->set_charset("utf8");
        echo "conexión exitosa en la base de datos";
    }
    
}



?>