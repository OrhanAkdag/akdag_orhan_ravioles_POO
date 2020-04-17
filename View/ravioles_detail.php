
<html>
<head>
    <?php
    include 'Parts/stylesheets.html'
    ?>
</head>

<body>
<?php 
include 'navbar.php'
?>
<div class="container my-2">
    <h1 class="text-center my-5 bg-light shadow p-2 text-dark">La raviole <?php echo $ravioles->getTitre();?></h1>
    <div class="text-center">
        <img src="<?php echo('assets/img/'.$ravioles->getFile());?>" style="max-width: 350px;">
    </div>
    <div class="text-center d-flex justify-content-center my-5">
        <ul class="list-group" style="width: 50%">
            <li class="list-group-item"><?php echo $ravioles->getIngredient_principal();?></li>
            <li class="list-group-item"><p><?php echo $ravioles->getRecette();?></p></li>
        </ul>
    </div>
    <div class="text-center">
        <a href="../akdag_orhan_ravioles_POO/home.html">
            <button style="margin-bottom:10px;" class="btn btn-success">Revenir en arrière</button>
        </a>
    </div>

</div>
<?php
 include 'Parts/scripts.html'
?>
</body>