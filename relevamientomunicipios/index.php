<?php 
    include_once('../config/app.php');
    include_once('../routes/routes.php');

    if(isset($_POST['c']) && isset($_POST['a'])){
        //Acciones "más privilegiadas"
        $controller = $_POST['c'];
        $action = $_POST['a'];    
    }else{
        $controller = $_GET['c']; 
        $action = $_GET['a']; 
    }

    $routes = new Routes();   
    //Recibo el controller a cargar (usar) y su acción a invocar
    $routes -> invoke($controller, $action);
?>


