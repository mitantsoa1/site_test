<?php 
    class Publier{
        public function index(){
            Controllers::loadView("indexView.php");
        }
        public function selectAllPub(){
            $ex = new Publication();
            $tab = $ex->selectAllPub();
            echo json_encode($tab) ;
        }

        public function insertPub(){
            $pub = new Publication();

            $titre = $_POST["titre"];
            $contenu = $_POST["contenu"];
            $photo = basename($_FILES["photo"]["name"]);

            $pub->setTitre($titre);
            $pub->setContenu($contenu);
            $pub->setPhoto($photo);
            $pub->insertPub();
            $rep = "images/";
            $chemin = $rep. basename($_FILES["photo"]["name"]);
                move_uploaded_file($_FILES["photo"]["tmp_name"], $chemin);
        }
    }
?>