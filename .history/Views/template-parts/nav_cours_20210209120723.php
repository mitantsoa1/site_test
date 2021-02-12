<div class="container-fluid">
    <div class="collapse navbar-collapse navbar-fixed-top" id="nav_cours">
        <a href="#" class="header__logo">Logo</a>
        <ul class="nav navbar-nav navbar-fixed-top" >
        <?php
            $db=new Database();
            $tab=$db->select("matiere")
                    ->execute(null);

                for($i=0;$i<2;$i++){

                    echo'
                            
                                    <a href="'.$tab[$i]->nom.'" class="btn btn-default matiere">'.$tab[$i]->nom.'</a>
                            
                    ';
                }
                
        ?>
            <li>
                <a href="more" name="btnMore" id="btnMore" class="btn btn-default matiere"> More...</a>
            </li>
            <li>
                <a href="deconnexion" name="btnDeco" id="btnDeco_cours" class="btn btn-default"  onclick="return confirm('Se deconnecter?')">Se deconnecter</a>
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
                    <?php
                        $db=new Database();
                        $tab=$db->select("matiere")
                                ->execute(null);

                            for($i=0;$i<2;$i++){

                                echo'
                                        
                                    <a href="'.$tab[$i]->nom.'" class="btn btn-default matiere">'.$tab[$i]->nom.'</a>
                                        
                                ';
                            }
                    ?>
                    </ul>
                    <ul class="menu_d">
                        <li>
                            <a href="deconnexion" name="btnDeco" id="btnDeco_cours" class="btn btn-default"  onclick="return confirm('Se deconnecter?')">Se deconnecter</a>
                        </li>
                        
                    </ul>

                </nav>
            </div>
        </header>
