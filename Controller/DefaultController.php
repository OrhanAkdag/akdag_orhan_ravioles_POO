<?php
class DefaultController{

    public function home()
    {
        $RaviolesManager = new RaviolesManager();
        $ravioles = $RaviolesManager->selectAll();

        require 'View/home_view.php';
    }

}