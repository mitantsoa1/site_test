
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <?php 

    // require("../Core/autoload.php");
        Controllers::includeCSS(["bootstrap.min","all","accueil","brands.min","util","sweetalert2.min","nav"]);
    ?>
</head>
<body>
<?php 
    Controllers::includeTemplate("nav_cours.php");
?>

    <h3 class="text-center titre_debut">Bienvenu <?php echo $_SESSION["user"]; ?></h3>
    <div class="container">
       
    <div class="container">
        <div class="row">
            <section class="article">
                <h2 class="text-center">Titre</h2>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
            </section>
            <div class="col-sm-6">
                <section class="article2">
                    <h2 class="text-center">Titre</h2>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                    <button class="read" value="Read More">Read more </button>
                </section>
                <section class="article2">
                    <div>
                        <h2 class="text-center">Titre</h2>
                        <img src="image/forza-motorsport-4_1920x1080.jpg" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint hic distinctio tempora commodi quam laborum suscipit? Dignissimos asperiores esse odio similique necessitatibus provident minima molestiae consequuntur vitae nulla, totam animi?</p>
                        <button class="read" value="Read More">Read more </button>
                    </div>
                </section>
            </div>
                                            
            <div class="col-sm-6">
                <section class="article2">
                    <h2 class="text-center">Titre</h2>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                    <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                    <button class="read" value="Read More">Read more </button>
                </section>
                <section class="article2">
                    <div>
                        <h2 class="text-center">Titre</h2>
                        <img src="image/forza-motorsport-4_1920x1080.jpg" alt="">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sint hic distinctio tempora commodi quam laborum suscipit? Dignissimos asperiores esse odio similique necessitatibus provident minima molestiae consequuntur vitae nulla, totam animi?</p>
                        <button class="read" value="Read More">Read more </button>
                    </div>
                </section>
            </div>
        </div>
    </div>
    
    <?php 
        Controllers::includeJS(["jquery","bootstrap","all","form-plugin","accueil","sweetalert2.min"]);
    ?> 
</body>
</html>