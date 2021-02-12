<?php 
    class Connexion{
        public function index(){
            Controllers::loadView("indexView.php");
        }
        //insert
        public function register(){
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
    
            if(Exemple::verifyNom($nom)==0){
                if(Exemple::verifyPrenom($prenom)==0){
                    $ex = new Exemple();
                    $ex->setNom($nom);
                    $ex->setPrenom($prenom);
                    $ex->insertExemple();
                }else{
                    echo "Prenom existe";
                }
            }else{
                echo "Nom existe";
            }
        }
    }
?>