<?php 
    error_reporting(-1);
    class RelevateController {
        
        public function defaultAction(){
            //require_once "modelo";

            //require_once "vista";
            //SIEMPRE: qué body quiero que muestre (construye toda la página en Base)
    
            $bodyToCharge = "relevate/bodyRelevate.php";
            $navToCharge = 'base/navBars/unloggedNavBar.php';
            include VIEWS."base/basePage.php";
      
        }

        public function createRelevate(){
            //include MODELO
            require_once MODELS."relevate/relevateModel.php";
            $relevateModel = new RelevateModel();

            //LOGICA 
            $municipio = ucwords(strtolower($_POST['municipio']));
            $nombreApe = ucwords(strtolower($_POST['nombreApe']));
            $almacena = $_POST['almacena'];
            $titular = $_POST['titular'];
            $dimension = $_POST['dimension'];
            $cantVehiculos = $_POST['cantVehiculos'];
            $comentarios = $_POST['comentarios'];
            $direccion = $_POST['direccion'];

            $fechaAlta = date('20'.'y-m-j'); //dateToday

            $dataArray[] = "('$municipio', '$nombreApe', '$direccion', '$almacena', '$titular', '$dimension', '$cantVehiculos', '$comentarios', '$fechaAlta')";

            //Se inscribe
            $relevateModel -> createRelevation($dataArray);
            
            $inscriptionCreated = TRUE;
            $_GET['msj']= "inscriptionCreated";

            //redirecciono la VISTA
                    
            $bodyToCharge = "relevate/bodyRelevate.php";
            $navToCharge = 'base/navBars/unloggedNavBar.php';
            include VIEWS."base/basePage.php";                         
        }      
    }

?>