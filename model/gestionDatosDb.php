<?php
/// Aqui se realiza crear,consultas,insertar y borrar datos en la base de datos

require("conexionDb.php");

class serviciosDatos extends  Conexion{
  
    public function __construct()
    {
        parent:: __construct();
    }

    public function obtenerUsuarios()
    {   //Realizar consultas a la tabla usuarios db tallerphp06
        $consulta = $this ->conexionDB-> query('select * from usuarios');
        $resultado = $consulta -> fetch_all(MYSQLI_ASSOC);

        return $resultado;
    }
    

}

?>