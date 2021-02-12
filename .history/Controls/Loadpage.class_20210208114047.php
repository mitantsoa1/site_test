<?php
// controlleur pour "loader" des pages
    class Loadpage{
        public function load(){ 
            Controllers::loadView("load.php");
        }
        public function inscrire(){
            Controllers::loadView("formInscription.php");
        }
        public function accueil(){
            Controllers::loadView("accueil.php");
        }
        public function connecter(){
            Controllers::loadView("formConnexion.php");
        }
    }
?>