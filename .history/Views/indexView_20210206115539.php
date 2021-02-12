<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;maximum-scale=1.0">
    <title>sympa</title>
    <?php
Controllers::includeCss(["bootstrap.min", "all","util","indexView"]);
?>
    
    <link rel="stylesheet" media="screen and (max-width: 992px)" href="Publics/css/respinf992.css">
    <link rel="stylesheet" media="screen and (max-width: 767px) and (min-width: 504px)" href="Publics/css/respin75.css">
    <link rel="stylesheet" media="screen and (max-width: 503px)" href="Publics/css/respinf503.css">

</head>
<body data-spy="scroll" data-target=".header" data-offset="0">
<div class="site-container">
    <div class="site-pusher">
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
                            <a href="#">Se connecter</a>
                        </li>
                        
                    </ul>

                </nav>
            </div>
        </header>
        
        <div class="site-content">
        <!-- carousel -->
            <div class="container-fluid" id="page-top">
                    <div id="monCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#monCarousel" data-slide-to="1"></li>
                            <li data-target="#monCarousel" data-slide-to="2"></li>
                            <li data-target="#monCarousel" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img class="img-fluid" src="Publics/images/CA-wp1" alt="image">
                                <div class="carousel-caption">
                                    <h4>IMAGE1</h4>
                                </div>
                            </div>

                            <div class="item ">
                                <img class="img-fluid" src="Publics/images/CA-wp2" alt="image">
                                <div class="carousel-caption">
                                    <h4>IMAGE2</h4>
                                </div>
                            </div>

                            <div class="item ">
                                <img class="img-fluid" src="Publics/images/CA-wp3" alt="image">
                                <div class="carousel-caption">
                                    <h4>IMAGE3</h4>
                                </div>
                            </div>

                            <div class="item ">
                                <img class="img-fluid" src="Publics/images/CA-wp4" alt="image">
                                <div class="carousel-caption">
                                    <h4>IMAGE4</h4>
                                </div>
                            </div>

                            <a href="#monCarousel" class="left carousel-control chevron" role="button" data-slide="prev">
                                <span class="fa fa-chevron-left" ></span>
                            </a>

                            <a href="#monCarousel" class="right carousel-control chevron" role="button" data-slide="next">
                                <span class="fa fa-chevron-right" ></span>
                            </a>
                        </div>
                    </div>
            </div>
            <!-- fin caroussel -->
           
                <div class="container-fluid content">
                    <div id="menu1" class="containerMot" >
                            <h2 class="text-center" id="mot">MOT DU DIRECTEUR </h2>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="titleimg" id="titleimg1"><img class="img" src="Publics/images/FR-wp1.jpg" alt="FR-wp1.jpg"></div>  
                            </div>
                            <div class="col-sm-7 col">
                                <div class="title" id="contenu1">
                                    <p> 
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias excepturi temporibus neque repellendus vel vitae nihil? Vel, nihil. Vitae minima laborum fuga cupiditate vero porro aspernatur assumenda voluptas ex officia?
                                    </p>
                                    <p> 
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias excepturi temporibus neque repellendus vel vitae nihil? Vel, nihil. Vitae minima laborum fuga cupiditate vero porro aspernatur assumenda voluptas ex officia?
                                    </p>
                                    <p> 
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias excepturi temporibus neque repellendus vel vitae nihil? Vel, nihil. Vitae minima laborum fuga cupiditate vero porro aspernatur assumenda voluptas ex officia?
                                    </p>

                                </div>  
                            </div>
                        </div>
                    </div>
                    <div id="menu2">
                        <h2 class="text-center" id="mission">MISSION</h2>
                        <div class="row">
                            <div class="col-xs-5">
                                <div class="titleimg" id="titleimg2"><img class="img" src="Publics/images/FR-wp2.jpg" alt="FR-wp"></div>  
                            </div>
                            <div class="col-xs-5 col-xs-offset-1">
                                <div class="titleimg" id="titleimg3"><img class="img" src="Publics/images/FR-wp3.jpg" alt="FR-wp"></div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="title" id="contenu2">
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum quasi possimus reprehenderit unde inventore sit maiores tenetur sapiente amet.
                                    </p>
                                </div>  
                            </div>
                            <div class="col-xs-6">
                                <div class="title" id="contenu3">
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate tempore quos doloremque? Dignissimos, nesciunt repellat?
                                    </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                     
                    <div id="menu3"  class="containerVision">
                                <h2 class="text-center" id="vision">VISION</h2>
                        <div class="row">
                                <div class="col-sm-4">
                                    <div class="titleimg" id="titleimg4"><img class="imgMot" src="Publics/images/FR-wp4.jpg" alt="FR-wp">
                                    </div>  
                                </div>
                                <div class="col-sm-8">
                                    <div class="title" id="contenu4">
                                        <p> 
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, assumenda.
                                        </p>
                                        <p> 
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, aut voluptatibus aperiam, ipsa odit itaque harum similique corrupti consectetur mollitia ea earum accusamus molestias tempore vero dolor necessitatibus a officia.Vitae at inventore harum? Suscipit incidunt, id eius repellendus totam dolore aut praesentium accusamus, impedit ut optio. Animi numquam possimus recusandae unde minus, sed sapiente quisquam rem totam eum vero.0.
                                        </p>
                                        <p> 
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, assumenda.
                                        </p>
                                    </div>  
                            
                                    <div class="title" id="contenu5">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, accusamus.
                                        </p>
                                        <p> 
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam, aut voluptatibus aperiam, ipsa odit itaque harum similique corrupti consectetur mollitia ea earum accusamus molestias tempore vero dolor necessitatibus a officia.Vitae at inventore harum? Suscipit incidunt, id eius repellendus totam dolore aut praesentium accusamus, impedit ut optio. Animi numquam possimus recusandae unde minus, sed sapiente quisquam rem totam eum vero.0.
                                        </p>
                                    </div>  
                                </div>
                        </div>
                    </div>
                    <div class="section" id="contact">
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
                                            <div class="col-md-12">
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
                                    <div class="col-sm-4 col-xs-4 col-xs-offset-1 col-xs-offset-1 ">
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
                                    <div class="col-xs-4 col-xs-4 col-xs-offset-1 col-xs-offset-1 ">
                                            <ul class="social-buttons">
                                                    <a href="https://twitter.com/montwitt" target="_blank"><i class="fas fa-twitter"></i></a><a href="https://facebook.com/monFB" target="_blank"><i class="fa fa-facebook"></i></a><a href="https://www.linkedin.com/monLK" target="_blank"><i class="fa fa-linkedin"></i></a>
                                            </ul>
                                            <p class=" copyright"> &copy; <?php echo(date("M-Y", strtotime('now'))); ?></p>
                                    </div>
                                    
                                    <!-- <div class="col-sm-8 col-md-8 copyright">
                                        <iframe id="map" src="https://www.google.com/maps/d/embed?mid=1U_hweZIOX1TRT7LKefLCXUd4TCWV_mef" height="480"></iframe>
                                    </div> -->
                                </div>
                            </div>
                        </div>
            
                </div>
        </div>

        <div class="site-cache"></div>
    </div>
</div>
    <?php
Controllers::includeJS(["jquery", "bootstrap", "all", "form-plugin", "indexView"]);
?>
    </body>
</html>