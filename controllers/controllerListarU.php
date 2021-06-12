<?php
//controlador Listar usuario del sub menu listar usuarios
require("../model/gestionDatosDb.php");

$datos = new serviciosDatos();

$listaU = $datos ->  obtenerUsuarios();

$vista = "crudDatos.php";
$subVista = "listaUsuarios.php";
require("../views/layout.php");
?>