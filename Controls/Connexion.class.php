<?php 
    class Connexion{
        public function index(){
            Controllers::loadView("indexView.php");
        }
        public function formInscription(){
            Controllers::loadView("formInscription.php");
        }
        //insert
        public function register(){
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $mail = $_POST["mail"];
            $pass = $_POST["pass"];
            $select = $_POST["select"];
           
            if(User::verifyMail($mail)<=0){
                    $user = new User();
                    $user->setNom($nom);
                    $user->setPrenom($prenom);
                    $user->setPass($pass);
                    $user->setMail($mail);
                    $user->setSelect($select);
                    $user->insertUser();

                    $_SESSION["user"]= ucwords($nom) ;
                     $_SESSION["pass"]=sha1($pass) ;
                     $_SESSION["mail"]=$mail;
                    // echo $nom."".$prenom." ".$mail." ".$pass;
                    echo json_encode("ok");
            }else{
                echo "Mail existe";
            }
        }

        //connexion
        public function connecter(){
            $nom = $_POST["nom"];
            $mail = $_POST["mail"];
            $pass = $_POST["pass"];
            $select = $_POST["select"];
            $user = new User();
                    $user->setNom($nom);
                    $user->setPass($pass);
                    $user->setMail($mail);
                    $user->setSelect($select);
                $tab=$user->selectUser();
                if(count($tab)==1){
                    $_SESSION["user"]= ucwords($nom) ;
                    $_SESSION["pass"]=sha1($pass) ;
                     $_SESSION["mail"]=$mail;
                     Loadpage::accueil();
                echo  count($tab);                  
                  
                }else {
                    Controllers::loadView("formInscription.php");
                }
        }
    }
?>