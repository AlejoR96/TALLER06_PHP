<!--vista menu crud datos-->
<H1 class="h3 mb-3">CRUD BASICO</H1>

<div class="col-12 d-flex flex-column align-items-lg-start align-items-md-center flex-lg-row justify-content-lg-around align-items-center">

    <div class="col-12 col-md-6 col-lg-3 bg-light rounded rounded p-2 m-3 m-lg-0">
        <!--Submenu de la vista crud Datos-->
        <ul class="nav flex-row flex-md-column flex-lg-column">
            <li class="nav-item styleLi">
                <a class="nav-link" href="../controllers/controllerListarU.php">Listar usuarios</a>
            </li>
            <li class="nav-item styleLi">
                <a class="nav-link" href="../controllers/controllerRutas.php?opc=3&subOpc=5">Registrar usuarios</a>
            </li>
            
        </ul>

    </div>

    <div class="col-12 col-md-6 col-lg-8 bg-light rounded rounded p-5">
        <!--Codigo php para redireccionar a la subvista-->
        
        <?php

        if (!isset($subVista)) {
            $subVista = "crudInicioD.php";
        }
        require $subVista;

        ?>
    </div>

</div>