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


    <?php 
        Controllers::includeJS(["jquery","bootstrap","all","form-plugin","indexView"]);
    ?>
</body>
</html>