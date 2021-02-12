<?php 
    class Publier{
        public function index(){
            Controllers::loadView("indexView.php");
        }

        public function insertPub(){
            $pub = new Publier();
            $titre = $_POST["titre"];
            $contenu = $_POST["contenu"];
            $photo = $_POST["photo"];
            
            $pub->setContenu($contenu);
            $pub->setPhoto(basename($_FILES["photo"]["name"]));
        }
    }
?>