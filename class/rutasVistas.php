<?php
    // Aqui va la clase para las rutas de las vistas y subvistas

    class vistasRutas{

        public function menuPricipal($r)/*inicio,nosotros,productos*/
        {
            switch ($r) {
                case 0:
                    $vista="home.php";
                    break;
                
                case 1:
                    $vista="nosotros.php";
                    break;
                
                case 2:
                    $vista="productos.php";//falta la vista 
                    break;
                
                default:
                    $vista="home.php";
                    break;
            }

            return $vista;
        }

        public function menuSecundario($r)/*Mision,nosotros,productos*/
        {
            switch ($r) {
                case 0:
                    $subVista="mision.php";
                    break;

                case 1:
                    $subVista="vision.php";
                    break;

                case 2:
                    $subVista="organigrama.php";
                    break;

                case 3:
                    $subVista="formularioR.php";
                    break;

                case 4:
                    $subVista="tablaR.php";
                    break;
                
                default:
                    $subVista="mision.php";
                    break;
            }
            return $subVista;
        }
        

    }
?>