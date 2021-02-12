<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="nav navbar-nav navbar-fixed-top" id="nav_cours">
    <?php
        $db=new Database();
        $tab=$db->select("matiere")
                ->execute(null);

            for($i=0;$i<2;$i++){

                echo'
                        <li>
                                <a href="'.$tab[$i]->nom.'" class="btn btn-default">'.$tab[$i]->nom.'</a>
                        </li>
                ';
            }
            
    ?>
        <li>
            <a href="more" name="btnMore" id="btnMore" class="btn btn-default"> More...</a>
        </li>
        <li>
            <a href="deconnexion" name="btnDeco" id="btnDeco_cours" class="btn btn-default"  onclick="return confirm('Se deconnecter?')">Se deconnecter</a>
        </li>
        
    </ul>
</div>