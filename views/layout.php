<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../access/css/bootstrap.min.css">
    <link rel="stylesheet" href="../access/css/styles.css">
    <title>Taller Bootstrap</title>
</head>
<body>
     <!--HEADER-->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">PHP</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../controllers/controllerRutas.php?opc=0">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="../controllers/controllerPrivada.php?opc=4">Privado</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/controllerRutas.php?opc=1">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/controllerRutas.php?opc=2">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../controllers/controllerRutas.php?opc=3">Crud Datos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!--MAIN-->  
    <main class="col-12 bg-primary d-flex p-4 d-flex flex-column align-items-center">
       <!--Aqui va codigo php-->
       <?php

        if (!isset($vista)) {
            
            $vista = "home.php";
        }
         require $vista;

       ?>

    </main>

    <!--FOOTER-->
    <footer class="bg-dark d-flex justify-content-center align-items-center">

        <div class="d-flex justify-content-lg-around align-items-center m-2">
            <div class="m-2"><img class="imgGithub" src="../access/img/LogoGit.png" alt=""></div>
            <div class="d-flex flex-column align-items-center">
                <p class="text-white m-0 p-0">Alejandro Rivera</p>
                <p class="text-white m-0 p-0">AlejoR96</p>
            </div>
        </div>
    
    </footer>
    <!--SCRIPT JS-->
    <script> src="../access/js/bootstrap.bundle.min.js"</script>
</body>
</html>