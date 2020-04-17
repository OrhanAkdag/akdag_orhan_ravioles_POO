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
    <div class="container">
        <h1 class="text-center my-5 bg-light shadow p-2 text-dark">Bienvenue sur le CRUD des ravioles</h1>

    <a href="../akdag_orhan_ravioles_POO/index.php?controller=ravioles&action=addForm">
        <button style="margin-bottom:10px;" class="btn btn-success">Ajouter une raviole</button>
    </a>

    <table class="table shadow text-dark bg-light">
        <thead>
            <td>@Id</td>
            <td>Ingredient principal</td>
            <td>Titre</td>
            <td>Recette</td>
            <td>Image</td>
            <td>Action</td>
        </thead>

        <tbody>
            <?php
                foreach ($ravioles as $rav) {
                    ?>
                    <tr>
                        <td><?php echo $rav->getId()?></td>
                        <td><?php echo $rav->getIngredient_principal()?></td>
                        <td><?php echo $rav->getTitre()?></td>
                        <td><?php echo substr($rav->getRecette(), 0, 120)."..."?></td>
                        <td>
                        <img style="max-width: 140px;" src="<?php echo('assets/img/'.$rav->getFile()); ?>"
                            alt="Image de la planète <?php $rav->getFile(); ?>"/> 
                        <td>
                            <a href="../akdag_orhan_ravioles_POO/index.php?controller=ravioles&action=voir&id=<?php echo $rav->getId()?>" class="mx-2"><i class="fas fa-eye mx-2"></i></a>
                            <a href="../akdag_orhan_ravioles_POO/index.php?controller=ravioles&action=updateForm&id=<?php echo $rav->getId()?>" class="mx-2"><i class="fas fa-edit mx-2"></i></a>
                            <a href="../akdag_orhan_ravioles_POO/index.php?controller=ravioles&action=delete&id=<?php echo $rav->getId()?>" class="mx-2"><i class="fas fa-trash mx-2"></i></a>
                        </td>
                    </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    </div>
    <?php
    include 'Parts/scripts.html'
    ?>
    </body>
</html>