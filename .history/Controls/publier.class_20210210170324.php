<?php 
    class Publier{
        public function index(){
            Controllers::loadView("indexView.php");
        }

        public function insertPub(){
            $pub = new Publication();

            $titre = $_POST["titre"];
            $contenu = $_POST["contenu"];
            $photo = basename($_FILES["photo"]["name"]);

            $pub->setTitre($titre);
            $pub->setContenu($contenu);
            $pub->setPhoto(basename($_FILES["photo"]["name"]));
        }
    }
?>