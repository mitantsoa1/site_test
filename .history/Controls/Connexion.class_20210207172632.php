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
        public function connect(){
            $nom = $_POST["nom"];
            $mail = $_POST["mail"];
            $pass = $_POST["pass"];
            
            $user = new User();
                    $user->setNom($nom);
                    $user->setPass($pass);
                    $user->setMail($mail);
        }
    }
?>