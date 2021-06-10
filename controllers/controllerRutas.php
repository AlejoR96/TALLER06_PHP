<?php

require("../class/rutasVistas.php");

$rutaVista = new vistasRutas();

if (isset($_GET["opc"])) {
    $vista = $rutaVista -> menuPricipal($_GET["opc"]);
}

if (isset($_GET["subOpc"])) {
    $subVista = $rutaVista -> menuSecundario($_GET["subOpc"]);
}


require ("../views/layout.php")
?>