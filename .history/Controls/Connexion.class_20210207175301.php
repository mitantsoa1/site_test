<?php 
    class Connexion{
        public function index(){
            Controllers::loadView("indexView.php");
        }
        //insert
        public function register(){
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $mail = $_POST["mail"];
            $pass = $_POST["pass"];
           
            if(User::verifyMail($mail)<=0){
                    $user = new User();
                    $user->setNom($nom);
                    $user->setPrenom($prenom);
                    $user->setPass($pass);
                    $user->setMail($mail);
                    $user->insertUser();
                    // echo $nom."".$prenom." ".$mail." ".$pass;
                    echo json_encode("ok");
            }else{
                echo "Mail existe";
            }
        }

        //connexion
        public function connecter(){
            $nom = $_POST["name"];
            $mail = $_POST["mail"];
            $pass = $_POST["pass"];
            echo $nom." ".$mail." ".$pass;
            // $user = new User();
            //         $user->setNom($nom);
            //         $user->setPass($pass);
            //         $user->setMail($mail);
            //     $tab=$user->insertUser();
            //     if(count($tab)==1)
            //        Controllers::loadView("accuei.php");
            //     echo json_encode("Veillez-vous inscrire");
        }
    }
?>