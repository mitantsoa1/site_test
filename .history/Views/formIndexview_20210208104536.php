<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <?php
Controllers::includeCss(["bootstrap.min", "all","util","indexView","sweetalert2.min","formIndexview"]);
?>
</head>
<body>
    <div class="formIndexview container">
    <form id="form-connection">
        <!-- Titre colonne -->
        <h3 class="text-center">Se connecter</h3>
        <!-- Titre colone -->
        <!-- <div class="form-group">
            <input type="text" id="nom" class="form-control" placeholder="pseudo">
        </div> -->
        <input type="hidden" id="id">
        <div class="form-group">
            
            <input type="text" id="nom" class="form-control obligatoire " placeholder="nom">
        </div>
        <div class="form-group">
            
            <input type="text" id="prenom" class="form-control obligatoire hide" placeholder="prénom">
        </div>
        
        <div class="form-group">
            
            <input type="text" id="mail" class="form-control obligatoire" placeholder="mail">
        </div>
        <div class="form-group">
            
            <input type="password" id="pass" class="form-control obligatoire" placeholder="mot de passe">
        </div>
        <div class="text-center">
            <a href="connecter" id="btn_connecter" class="btn btn-primary">Se connecter</a>
            <a href="#" class="btn btn-success" id="btn_inscrire">S'inscrire</a>
            <a href="#" class="btn btn-primary hide" id="btn_enregistrer">Enregistrer</a>
            <a href="#" class="btn btn-success" id="btn_annuler">Annuler</a>
        </div>
        
    </form>
   

</div>
<?php
Controllers::includeJS(["jquery", "bootstrap", "all","brands.min", "form-plugin", "formIndexview","sweetalert2.min"]);
?>
</body>
</html>
