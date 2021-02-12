<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="nav navbar-nav navbar-fixed-top" id="nav_cours">
    <?php
        $db=new Database();
        $tab=$db->select("matiere")
                ->execute(null);

            for($i=0;$i<2;$i++){

                echo'
                        <li>
                                <a href="'.$tab[$i]->nom.'" class="btn btn-info">'.$tab[$i]->nom.'</a>
                        </li>
                ';
            }
            
    ?>
        <li>
        <a href="more" name="btnMore" id="btnMore" class="btn btn-info"> More...</a>
        </li>
        <li>
        <a href="deconnexion" name="btnDeco" id="btnDeco_cours" class="btn btn-default"  onclick="return confirm('Se deconnecter?')">Se deconnecter <span class="session_user"><?php echo $_SESSION['user']; ?></span></a>
        </li>
        
    </ul>
</div>