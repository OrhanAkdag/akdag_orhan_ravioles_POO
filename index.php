<?php
    require 'include.php';

    if($_GET['controller'] === 'default' && $_GET['action'] === 'home.html'){
        $raviolesController = new DefaultController();
        $raviolesController->home();
    }

    else if($_GET['controller'] === 'ravioles' && $_GET['action'] === 'addForm'){
        $raviolesController = new RaviolesController();
        $raviolesController->addForm();
    }
    else if($_GET['controller'] === 'ravioles' && $_GET['action'] === 'addRavioles'){
        $raviolesController = new RaviolesController();
        $raviolesController->persistForm();
    }
    else if($_GET['controller'] === 'ravioles' && $_GET['action'] === 'delete' && isset($_GET['id'])){
        $raviolesController = new RaviolesController();
        $raviolesController->delete($_GET['id']);
    }
    else if($_GET['controller'] === 'ravioles' && $_GET['action'] === 'updateForm' && isset($_GET['id'])){
        $raviolesController = new RaviolesController();
        $raviolesController->updateForm($_GET['id']);

    }

    else if($_GET['controller'] === 'ravioles' && $_GET['action'] === 'voir' && isset($_GET['id'])){
        $raviolesController = new RaviolesController();
        $raviolesController->ravioleView($_GET['id']);

    }

    else if($_GET['controller'] === 'ravioles' && $_GET['action'] === 'updateRavioles' && isset($_GET['id'])){
        $raviolesController = new RaviolesController();
        $raviolesController->updateRavioles($_GET['id']);

    }

    else {
        throw new Exception('La page demandée n\'existe pas', 404);
    }
?>