
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <?php 

    // require("../Core/autoload.php");
        Controllers::includeCSS(["bootstrap.min","all","accueil","indexview","brands.min","util","sweetalert2.min"]);
    ?>
</head>
<body>

    <h3 class="text-center">Bienvenu <?php echo $_SESSION["user"]; ?></h3>
    <div class="container">
        <header class="header">
            <div class="container">
                    <!-- pour humbourger -->
                    <a href="#" class="header__iconA"><span class="header__icon"></span></a>
                <a href="#" class="header__logo">Logo</a>
                <nav class="menu">
                    <ul class="menu_l">
                            <a href="#menu1">Menu1</a><a href="#menu2">Menu2</a><a href="#menu3">Menu3</a><a href="#menu4">Menu4</a>
                    </ul>
                    <ul class="menu_d">
                        <li>
                            <a href="connecter" id="btn_connecter_header">Se connecter</a>
                        </li>
                        
                    </ul>

                </nav>
            </div>
        </header>
    </div>
    
    <?php 
        Controllers::includeJS(["jquery","bootstrap","all","form-plugin","accueil","sweetalert2.min"]);
    ?> 
</body>
</html>