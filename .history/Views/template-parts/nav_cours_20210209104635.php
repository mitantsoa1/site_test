<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="nav navbar-nav navbar-right">
    <?php
        include_once('Models/Database.class.php');
        $db=new Database();
        Database::init('localhost','eselas','root','');
        $tab=$db->selectSP()
                ->from("matiere")
                ->executeSP();

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
        <a href="deconnexion" name="btnDeco" id="btnDeco" class="btn btn-danger"  onclick="return confirm('Se deconnecter?')">Se deconnecter <span class="session_user"><?php echo $_SESSION['user']; ?></span></a>
        </li>
        
    </ul>
</div>