<?php
// controlleur pour "loader" des pages
    class Loadpage{
        public function load(){ 
            Controllers::loadView("load.php");
        }
        // public function inscrire(){
        //     Controllers::loadView("formInscription.php");
        // }
        public function accueil(){
            if(!isset($_SESSION['user'])){
                Controllers::loadView("indexView.php");
            }else{
                Controllers::loadView("accueil.php");
            }
            
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
        public function deconnexion(){
             session_destroy();
            Controllers::loadView("indexView.php");
        }
    }
?>