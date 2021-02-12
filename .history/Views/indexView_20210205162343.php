<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ESELAS</title>
    <?php 
        Controllers::includeCss(["bootstrap.min","all","indexView"]);
    ?>
</head>
<body>
    
    <header>
      <a href="#" class="header__logo">Logo</a>
      <nav class="menu">
        <a href="#menu1">Menu1</a>
        <a href="#menu2">Menu2</a>
        <a href="#menu3">Menu3</a>
        <a href="#menu4">Menu4</a>
      </nav> 
    </header>
    <div class="container-fluid" id="page-top" style=" padding-top: 10px;">
            <div id="monCarousel" class="carousel slide" data-ride="carousel" style="height:500px;">
                <ol class="carousel-indicators">
                    <li data-target="#monCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#monCarousel" data-slide-to="1"></li>
                    <li data-target="#monCarousel" data-slide-to="2"></li>
                    <li data-target="#monCarousel" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="Publics/images/LOGO.png" alt="" style="width:100%;height:500px;" >
                        <div class="carousel-caption">
                            <h4>IMAGE1</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/1.jpg" alt="" style="width:100%;height:500px;" >
                        <div class="carousel-caption">
                            <h4>IMAGE2</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/2.jpg" alt="" style="width:100%;height:500px;" >
                        <div class="carousel-caption">
                            <h4>IMAGE3</h4>
                        </div>
                    </div>

                    <div class="item ">
                        <img src="Publics/images/3.jpg" alt="" style="width:100%;height:500px;">
                        <div class="carousel-caption">
                            <h4>IMAGE4</h4>
                        </div>
                    </div>

                    <a href="#monCarousel" class="left carousel-control" role="button" data-slide="prev">
                        <span class="fa fa-chevron-left" ></span>
                    </a>

                    <a href="#monCarousel" class="right carousel-control" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" ></span>
                    </a>
                </div>
            </div>
    </div>
    <div class="site-content">
        <div class="container">
        
        </div>
    </div>


    <?php 
        Controllers::includeJS(["jquery","bootstrap","all","form-plugin","indexView"]);
    ?>
</body>
</html>