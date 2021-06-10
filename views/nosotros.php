<!--Vista Nosotros principal-->
<H1 class="h3 mb-3">QUIENES SOMOS</H1>

<div class="col-12 d-flex flex-column align-items-lg-start align-items-md-center flex-lg-row justify-content-lg-around align-items-center">

    <div class="col-12 col-md-6 col-lg-3 bg-light rounded rounded p-2 m-3 m-lg-0">
        <!--Submenu de la vista nosotros-->
        <ul class="nav flex-row flex-md-column flex-lg-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../controllers/controllerRutas.php?opc=1&subOpc=0">Misión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controllers/controllerRutas.php?opc=1&subOpc=1">Visión</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controllers/controllerRutas.php?opc=1&subOpc=2">Organigrama</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controllers/controllerRutas.php?opc=1&subOpc=3">Formulario</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../controllers/controllerRutas.php?opc=1&subOpc=4">Usuarios Registrados</a>
            </li>
        </ul>

    </div>

    <div class="col-12 col-md-6 col-lg-8 bg-light rounded rounded p-5">
        <!--Codigo php para redireccionar a la subvista-->
        
        <?php

        if (!isset($subVista)) {
            $subVista = "mision.php";
        }
        require $subVista;

        ?>
    </div>

</div>