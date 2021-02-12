<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;maximum-scale=1.0">
    <title>sympa</title>
    <?php
Controllers::includeCss(["bootstrap.min", "all","util","indexView","brands.min","nav_cours","accueil"]);
?>
    
    <link rel="stylesheet" media="screen and (max-width: 992px)" href="Publics/css/respinf992.css">
    <link rel="stylesheet" media="screen and (max-width: 767px) and (min-width: 504px)" href="Publics/css/respin75.css">
    <link rel="stylesheet" media="screen and (max-width: 503px) and (min-width: 413px)" href="Publics/css/respinf503.css">

</head>
<body data-spy="scroll" data-target=".header" data-offset="0">
<div class="site-container">
    <div class="site-pusher">
        <?php 
            Controllers::includeTemplate("nav_cours.php");
        ?>
        
        <div class="site-content">
                <div class="container content" id="accueil_content">
                    <h3 class="text-center titre_debut">Bienvenu <?php echo $_SESSION["user"]; ?></h3>
                    <div class="row">
                        <div class="col-sm-12">
                            <section class="article">
                                <h2 class="text-center">Titre</h2>
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Facilis eveniet, aliquid voluptates, <span class="bleu"> ipsa nesciunt reprehenderit </span> suscipit autem, nulla tempora voluptate ipsam laborum facere obcaecati doloremque <span class="bleu"> doloribus placeat.</span>            Ab, sapiente quis!</p>
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
                    <div class="container-fluid" id="contact">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h2 class="title-2">Contact</h2>
                                    <h3 class="title-3"> Contactez-nous via le formulaire ci-dessous !</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form id="form-contact">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label id="name-help-block" class="help-block">Votre nom</label>
                                                    <input class="form-control champ" id="name" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label id="email-help-block" class="help-block">Votre adresse email</label>
                                                    <input class="form-control champ" id="email" type="text">
                                                </div>
                                                <div class="form-group">
                                                    <label id="phone-help-block" class="help-block">Votre numero de téléphone</label>
                                                    <input class="form-control champ" id="phone" type="text">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="form-group">
                                                    <label id="content-help-block" class="help-block">Contenu de votre message</label>
                                                    <textarea class="form-control champ" id="textareaContact"></textarea>			                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-10">
                                                <div class="form-group text-center">
                                                    <a href="#contact" id="validationOnMessageButton" class="btn btn-primary bg-secondary btn-lg text-uppercase js-scroll-trigger" data-toggle="modal" data-target="#">Envoyer</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

	                </div>
                    <div id="copyright">
                        <div id="info">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-5 col-xs-5 col-sm-offset-1 ">
                                        <div class="info">
                                        <span class="icon">
                                                    <i class="fas  fa-map-marker-alt"></i>
                                                </span>
                                            <a href="#id">
                                                
                                                <span class="legend">&nbsp; Mon adresse</span>
                                            </a>
                                        </div>
                                        <div class="info">
                                        <span class="icon">
                                                    <i class="fas  fa-envelope"></i>
                                                </span>
                                            <a href="mailto:monEmail">
                                                
                                                <span class="legend">Mon Email</span>
                                            </a>
                                        </div>
                                        <div class="info">
                                        <span class="icon">
                                                    <i class="fas fa-phone"></i>
                                                </span>
                                            <a href="#id">
                                                
                                                <span class="legend">Mon numero</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=" col-sm-5 col-sm-offset-1 ">
                                            <ul class="social-buttons">
                                                    <a href="https://twitter.com/montwitt" target="_blank"><i class="fas fa-twitter"></i></a><a href="https://facebook.com/monFB" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://www.linkedin.com/monLK" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            </ul>
                                            
                                    </div>
                                    
                                    <!-- <div class="col-sm-8 col-md-8 copyright">
                                        <iframe id="map" src="https://www.google.com/maps/d/embed?mid=1U_hweZIOX1TRT7LKefLCXUd4TCWV_mef" height="480"></iframe>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        
                        <div class="foot text-center text-muted">&copy; <?php echo(date("M-Y", strtotime('now'))); ?></div>
            
                </div>
        </div>

        <div class="site-cache"></div>
    </div>
</div>

<?php
Controllers::includeJS(["jquery", "bootstrap", "all","brands.min", "form-plugin", "indexView","sweetalert2.min"]);
?>
<!-- <script>
    $('document.body').on('click',"#btn_inscrire", function() {
            alert('ici');
        })
</script> -->
    </body>
</html>