<?php
//controlador del formularioRegistrarU.php para realizar el registro de usuario
//en la base de datos  

require("../model/gestionDatosDb.php");
    
    if (isset($_POST['id']) && (!empty($_POST['id'])) &&
        isset($_POST['nombre']) && (!empty($_POST['nombre'])) &&
        isset($_POST['correo']) && (!empty($_POST['correo'])) &&
        isset($_POST['contrasena']) && (!empty($_POST['contrasena']))) {
        

        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $contrasena = $_POST['contrasena'];

        $datos = new serviciosDatos();

        $validarDato = $datos -> validarId($id);
            
        if (!$validarDato) {
            
            $registrarUsuario = $datos -> registrarUsuario($id, $nombre,$correo,$contrasena);

                if ($registrarUsuario) {
                    $listaU = $datos ->  obtenerUsuarios();  
                    $tablaUsuarios = $listaU ->  obtenerUsuarios();  
                    $subVista = "listaUsuarios.php";
                }else {

                    $subVista = "formularioRegistrarU.php";
                }

            }else {
                $errorId = "El usuario ingresado ".$id." ya esta registrado";
                $subVista = "formularioRegistrarU.php";
            }

    }else {
    
        $subVista = "formularioRegistrarU.php";
    }


$vista = "crudDatos.php";
require("../views/layout.php");
?>