<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;maximum-scale=1.0">
    <title>ESELAS</title>
    <?php
Controllers::includeCss(["bootstrap.min", "all","util","indexView"]);
?>
    <link rel="stylesheet" media="screen and (max-width: 480px)" href="Publics/css/respSup480.css">
</head>
<body data-spy="scroll" data-target=".header" data-offset="0">
<div class="site-container">
    <div class="site-pusher">
        <header class="header">
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
        </header>
        <!-- carousel -->
        <div class="site-content">
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
            
                <div class="container">
                    <div id="menu1" class="containerMot" >
                            <h2 class="text-center" id="mot">MOT DU DIRECTEUR </h2>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="titleimg" id="title1"><img class="img" src="Publics/images/FR-wp1.jpg" alt="FR-wp1.jpg"></div>  
                            </div>
                            <div class="col-sm-7">
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
                        <h2 id="mission">MISSION</h2>
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="titleimg" id="title2"><img class="img" src="Publics/images/FR-wp2.jpg" alt="FR-wp"></div>  
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="title" id="title3"><img class=" imgMot" src="Publics/images/feature-img1.jpg" alt=""></div>  
                            </div> -->
                            <div class="col-sm-5 col-md-offset-1">
                                <div class="titleimg" id="title4"><img class="img" src="Publics/images/FR-wp3.jpg" alt="FR-wp"></div>  
                            </div>

                            <div class="col-sm-6">
                                <div class="title" id="contenu2">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt earum quasi possimus reprehenderit unde inventore sit maiores tenetur sapiente amet.</div>  
                            </div>
                            <!-- <div class="col-md-4">
                                <div class="title" id="contenu3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo debitis accusantium optio similique sequi aperiam..</div>  
                            </div> -->
                            <div class="col-sm-6">
                                <div class="title" id="contenu4">
                                    <p>
                                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptate tempore quos doloremque? Dignissimos, nesciunt repellat?
                                    </p>
                                </div>  
                            </div>
                        </div>
                    </div>
                    <div id="menu3"  class="containerVision">
                                <h2 id="vision">VISION</h2>
                        <div class="row">
                                <div class="col-sm-4">
                                    <div class="titleimg" id="title5"><img class="imgMot" src="Publics/image/FR-wp4.jpg" alt="FR-wp"></div>  
                                </div>
                                <div class="col-sm-4">
                                    <div class="title" id="contenu5">
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
                                </div>
                                <div class="col-md-4">
                                    <div class="title" id="contenu6">
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