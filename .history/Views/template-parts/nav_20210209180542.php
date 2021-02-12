<div class="container-fluid">
    <div class="collapse navbar-collapse navbar-fixed-top" id="myNav" >
        <a href="#" class="header__logo">Logo</a>
        <ul class="nav navbar-nav navbar-fixed-top">
            <li><a href="accueil" class="navbar-brand"><i class="fa fa-undo"> </i> accueil</a></li>
            <li><button class="afficher" onclick='showAll()'>afficher tous</button></li>
            <li><button class="afficher" onclick='cours()'>cours</button></li>
            <li><button class="afficher" onclick='exercice()'>exercice</button></li>
            <li><button class="afficher" onclick='evaluation()'>evaluation</button></li>
            <li class="active float_droite">
                    <a href="deconnexion" name="btnDeco" id="btnDeco" class="btn btn-default"  onclick="return confirm('Se deconnecter?')">Se deconnecter</a>
            </li>
        </ul>
    </div>
</div>
<header class="header">
            <div class="container">
                    <!-- pour humbourger -->
                    <a href="#" class="header__iconA"><span class="header__icon"></span></a>
                <a href="#" class="header__logo">Logo</a>
                <nav class="menu">
                    <ul class="menu_l">
                    <a href="accueil" class="navbar-brand"><i class="fa fa-undo"> </i> accueil</a><a href="#" class="afficher" onclick='showAll()'>afficher tous</a><a href="#" class="afficher" onclick='cours()'>cours</a><a href="#" class="afficher" onclick='exercice()'>exercice</a><a href="#" class="afficher" onclick='evaluation()'>evaluation</a>
                    </ul>
                    <ul class="menu_d">
                        <li>
                            <a href="connecter" id="btn_connecter_header" class="btn_connecter_header">Se connecter</a>
                        </li>
                        
                    </ul>

                </nav>
            </div>
        </header>
