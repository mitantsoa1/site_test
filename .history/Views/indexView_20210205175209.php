<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESELAS</title>
    <?php
Controllers::includeCss(["bootstrap.min", "all", "indexView"]);
?>
</head>
<body>

    <header class="header">
      <a href="#" class="header__logo">Logo</a>
      <nav class="menu">
          <ul class="menu_l">
                  <a href="#menu1">Menu1</a><a href="#menu2">Menu2</a><a href="#menu3">Menu3</a><a href="#menu4">Menu4</a>
          </ul>
          <ul class="menu_d">
           
                  <a href="#">Se connecter</a>
            
          </ul>



      </nav>
    </header>
    <!-- carousel -->
    <div class="container-fluid" id="page-top">
            <div id="monCarousel" class="carousel slide" data-ride="carousel" style="height:500px;">
                <ol class="carousel-indicators">
                    <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#monCarousel" data-slide-to="1"></li>
                    <li data-target="#monCarousel" data-slide-to="2"></li>
                    <li data-target="#monCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="Publics/images/CA-wp1" alt="" style="width:100%;height:500px;" >
                        <div class="carousel-caption">
                            <h4>IMAGE1</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/CA-wp2" alt="" style="width:100%;height:500px;" >
                        <div class="carousel-caption">
                            <h4>IMAGE2</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/CA-wp3" alt="" style="width:100%;height:500px;" >
                        <div class="carousel-caption">
                            <h4>IMAGE3</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/CA-wp4" alt="" style="width:100%;height:500px;">
                        <div class="carousel-caption">
                            <h4>IMAGE4</h4>
                        </div>
                    </div>

                    <a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" ></span>
                    </a>

                    <a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
                        <span class="fa fa-chevron-right" ></span>
                    </a>
                </div>
            </div>
    </div>
    <!-- fin caroussel -->
    <div class="site-content">
        <div class="container">
        <div id="menu1" class="containerMot" >
            <h2 id="mot">MOT DU DIRECTEUR </h2>
        <div class="row">
            <div class="col-md-5">
                <div class="title" id="title1"><img class="imgMot" src="Publics/images/feature-img1.jpg" alt=""></div>  
            </div>
            <div class="col-md-7">
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
   
        </div>
    </div>


    <?php
Controllers::includeJS(["jquery", "bootstrap", "all", "form-plugin", "indexView"]);
?>
    </body>
</html>