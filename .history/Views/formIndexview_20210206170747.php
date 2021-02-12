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
    <form class="form-inscription form col-content">
        <!-- Titre colonne -->
        <h3 class="text-center">Inscription</h3>
        <!-- Titre colone -->
        <!-- <div class="form-group">
            <input type="text" id="nom" class="form-control" placeholder="pseudo">
        </div> -->
        <div class="form-group">
            
            <input type="text" id="nom" class="form-control" placeholder="nom">
        </div>
        <div class="form-group">
            
            <input type="text" id="prenom" class="form-control" placeholder="prénom">
        </div>
        
        <div class="form-group">
            
            <input type="text" id="email" class="form-control" placeholder="mail">
        </div>
        <div class="form-group">
            
            <input type="password" id="pass" class="form-control" placeholder="mot de passe">
        </div>
        <div class="text-center">
            <a href="inscrire" class="btn btn-success">S'inscrire</a>
            <a href="#" id="see-login" class="btn btn-primary">Se connecter</a>
        </div>
        
    </form>
</div>
</body>
</html>
