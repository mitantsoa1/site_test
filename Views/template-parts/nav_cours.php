
<header class="header" id="header">
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
                                        
                                    <a href="'.$tab[$i]->nom.'">'.$tab[$i]->nom.'</a>
                                        
                                ';
                            }
                    ?>
                    <a href="more" name="btnMore" id="btnMore"> More...</a>
                    </ul>
                    <ul class="menu_d">
                        <li>
                            <a href="deconnexion" id="btnDeco_cours" class="btn_connecter_header" onclick="return confirm('Se deconnecter?')">Deconnexion</a>
                        </li>
                        
                    </ul>

                </nav>
            </div>
        </header>
