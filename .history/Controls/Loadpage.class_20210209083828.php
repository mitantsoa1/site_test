<?php
// controlleur pour "loader" des pages
    class Loadpage{
        public function load(){ 
            Controllers::loadView("load.php");
        }
        // public function inscrire(){
        //     Controllers::loadView("formInscription.php");
        // }
        public static function accueil(){
            Controllers::loadView("accueil.php");
            // $nom = $_POST["nom"];
            // $mail = $_POST["mail"];
            // $pass = $_POST["pass"];
            // $user = new User();
            //         $user->setNom($nom);
            //         $user->setPass($pass);
            //         $user->setMail($mail);
            //     $tab=$user->selectUser();
            //     // echo json_encode($tab);
            //     if(count($tab)==1){
            //         Controllers::loadView("accueil.php");
            //         $_SESSION["user"]=$nom;

            //     }else {
            //         Controllers::loadView("formInscription.php");
            //     }
        }
        public function connecter(){
            Controllers::loadView("formConnexion.php");
        }
    }
?>