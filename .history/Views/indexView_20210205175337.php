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
            <h2>Lorem ipsum dolor sit amet.</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, natus id quam quaerat voluptate consequuntur. Explicabo unde saepe laborum ipsam quibusdam architecto voluptatum velit, exercitationem autem nihil, dolores inventore ut! Ipsa qui accusantium cupiditate animi nisi blanditiis aliquam perferendis illo, assumenda eaque quidem consequuntur eligendi necessitatibus reprehenderit, porro provident molestias cum commodi aperiam dolorum dignissimos? Repellat ipsam culpa, illo magni, neque obcaecati nulla delectus est voluptate recusandae sunt vero similique dolor tenetur! Ipsum omnis quaerat quam est esse ullam sapiente? Enim saepe eligendi veritatis minus quod blanditiis repellat nostrum modi, dolores libero. Magni exercitationem adipisci inventore vitae delectus ullam eligendi distinctio quis iste, at eos, rem impedit tempore necessitatibus quod cum cupiditate libero autem doloremque dolorum error! Minus soluta aut autem quisquam odit! Unde impedit assumenda saepe harum iusto suscipit recusandae nemo explicabo obcaecati id mollitia adipisci quis earum ut magni quibusdam perspiciatis, eligendi debitis iste, consequatur cumque. Facere expedita, porro veritatis non vitae praesentium? Ipsum aliquid ea modi minima saepe ipsam nisi. Doloremque, rem id? Eos vel at, possimus vitae ab ad perspiciatis reprehenderit iure odit libero beatae reiciendis mollitia? Optio accusamus ex, nemo dolorem quia cupiditate deserunt obcaecati. Nulla facere mollitia sit minus suscipit perspiciatis iste nostrum asperiores magni aut illo exercitationem nemo porro eveniet, pariatur officiis? Quas repudiandae officia dolore perspiciatis vel explicabo tempora suscipit, harum ullam voluptatem architecto libero, eaque mollitia? Ex impedit tempore eaque animi possimus consequuntur dicta voluptates exercitationem placeat? Reiciendis iure, alias voluptatem rerum necessitatibus ex at assumenda, quidem odio quod placeat inventore.
            </p>
        </div>
    </div>


    <?php
Controllers::includeJS(["jquery", "bootstrap", "all", "form-plugin", "indexView"]);
?>
    </body>
</html>