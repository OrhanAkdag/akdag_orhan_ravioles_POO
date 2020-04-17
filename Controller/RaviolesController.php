<?php
class RaviolesController{

    public function addForm()
    {
         require 'View/insert_form.php';
    }

    public function ravioleView($id)
    {
        $raviolesManager = new RaviolesManager();
        $ravioles = $raviolesManager->select($id);
        require 'View/ravioles_detail.php';
    }

    public function persistForm()
    {
        $fileUrl = null;
        $allowedExtension = ['image/png','image/jpeg','file/gif'];
        if(in_array($_FILES['file']['type'],$allowedExtension)){
            if($_FILES['file']['size'] < 80000000){
                $extension = explode('/', $_FILES['file']['type'])[1];
                $fileUrl = uniqid().'.'.$extension;
                move_uploaded_file($_FILES['file']['tmp_name'],'assets/img/'.$fileUrl);
            }
        } 

        $ravioles = new Ravioles(null, $_POST['ingredient_principal'], $_POST['titre'],  $_POST['recette'], $fileUrl);
        $raviolesManager = new RaviolesManager();
        $raviolesManager->insert($ravioles);
        header('Location: /akdag_orhan_ravioles_POO/index.php?controller=default&action=home.html');
    }

    public function delete($id)
    {
        $raviolesManager = new RaviolesManager();
        $raviolesManager->delete($id);
        header('Location: /akdag_orhan_ravioles_POO/index.php?controller=default&action=home.html');
    }

    public function updateForm($id)
    {
        $raviolesManager = new RaviolesManager();
        $ravioles = $raviolesManager->select($id);
        require 'View/update_form.php';
    }

    public function updateRavioles($id)
    {
        $fileUrl = null;
        $allowedExtension = ['image/png','image/jpeg','file/gif'];
        if(in_array($_FILES['file']['type'],$allowedExtension)){
            if($_FILES['file']['size'] < 80000000){
                $extension = explode('/', $_FILES['file']['type'])[1];
                $fileUrl = uniqid().'.'.$extension;
                move_uploaded_file($_FILES['file']['tmp_name'],'assets/img/'.$fileUrl);
            }
        }  

        $raviolesManager = new RaviolesManager();
        $ravioles = $raviolesManager->select($id);
        if(!is_null($fileUrl)){
        $ravioles = new Ravioles($id, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], $fileUrl);
        $raviolesManager->update($ravioles);
        }
        else{
            $ravioles = new Ravioles($id, $_POST['ingredient_principal'], $_POST['titre'], $_POST['recette'], null);
            $raviolesManager->update_without_img($ravioles);
        }

        header('Location: /akdag_orhan_ravioles_POO/index.php?controller=default&action=home.html');
    }
}
