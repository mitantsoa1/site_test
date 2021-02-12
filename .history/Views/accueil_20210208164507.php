
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <?php 

    // require("../Core/autoload.php");
        Controllers::includeCSS(["bootstrap.min","all","accueil","brands.min","util","sweetalert2.min"]);
    ?>
</head>
<body>
    <h3 class="text-center">Bienvenu <?php echo $_SESSION["user"]; ?></h3>
    
    <?php 
        Controllers::includeJS(["jquery","bootstrap","all","form-plugin","accueil","sweetalert2.min"]);
    ?> 
</body>
</html>