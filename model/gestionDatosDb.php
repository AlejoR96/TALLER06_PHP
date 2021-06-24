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
        $consulta = $this ->conexionDB-> query('SELECT * FROM usuarios');
        $resultado = $consulta -> fetch_all(MYSQLI_ASSOC);
        $this -> conexionDB ->close();
        return $resultado;
    }
//----------------------------------------------------------------------------//
    public function registrarUsuario($id,$nombre,$correo,$contrasena){

        $sql = "INSERT INTO usuarios(id,nombre,correo,contrasena) VALUES('".$id."','".$nombre."','".$correo."','".$contrasena."')";
        $resultado = $this -> conexionDB ->query($sql);
        if ($resultado) {
            $this -> conexionDB ->close();
            return true;
        }else{
            $this -> conexionDB ->close();
            return false;
        }
        
    }

//------------------------------------------------------------------------------------//

    public function validarId ($id){
        
        $id_existe = false;
        $consulta = $this ->conexionDB-> query("SELECT * FROM usuarios WHERE id='".$id_existe."'");
        $resultado = $consulta -> fetch_all(MYSQLI_ASSOC);

        if ($resultado) {
            return true;

        }else {
            return false;
        }
    }
    

}

?>