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
    <h1 class="text-center my-5 bg-light shadow p-2 text-dark">Ajouter une recette</h1>
    <form method="post" action="index.php?controller=ravioles&action=addRavioles" class="p-5 shadow bg-light" enctype="multipart/form-data">
        <div class="form-group">
            <label class="text-dark">Ingrédient principale</label>
            <input type="text" name="ingredient_principal" class="form-control" placeholder="Nom de l'ingrédient principale" required>
        </div>
        <div class="form-group">
            <label class="text-dark">Titre</label>
            <input type="text" name="titre" class="form-control" placeholder="Titre" required>
        </div>
        <div class="form-group">
            <label class="text-dark">Recette</label>
            <textarea type="text" name="recette" class="form-control">
            </textarea>
        </div>
        <div class="form-group">
            <label class="text-dark">Image</label>
            <input type="file" name="file">
        </div>
        <button type="submit" class="btn btn-primary">Valider</button>
    </form>
</div>
<?php
 include 'Parts/scripts.html'
?>
</body>