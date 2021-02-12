<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seconnecter</title>
    <?php
Controllers::includeCss(["bootstrap.min", "all","util","indexView","formIndexview"]);
?>
</head>
<body>
    <div class="formIndexview container">
    <form id="form-inscription">
        <!-- Titre colonne -->
        <h3 class="text-center">Inscription</h3>
        <!-- Titre colone -->
        <!-- <div class="form-group">
            <input type="text" id="nom" class="form-control" placeholder="pseudo">
        </div> -->
        <div class="form-group">
            
            <input type="text" id="nom" class="form-control obligatoire" placeholder="nom">
        </div>
        <div class="form-group">
            
            <input type="text" id="prenom" class="form-control obligatoire" placeholder="prénom">
        </div>
        
        <div class="form-group">
            
            <input type="text" id="mail" class="form-control obligatoire" placeholder="mail">
        </div>
        <div class="form-group">
            
            <input type="password" id="pass" class="form-control obligatoire" placeholder="mot de passe">
        </div>
        <div class="text-center">
            <a href="#" class="btn btn-success" id="btn_inscrire">S'inscrire</a>
        </div>
        
    </form>
</div>
<?php
Controllers::includeJS(["jquery", "bootstrap", "all", "form-plugin", "formIndexview","sweetalert2.min"]);
?>
</body>
</html>
