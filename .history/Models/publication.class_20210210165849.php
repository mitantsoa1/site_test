<?php 
    class Publication{
            private $titre,$contenu,$id,$photo;
    
            //setters
            public function setTitre($n){
                $this->titre = htmlspecialchars(trim($n));
            }
            public function setContenu($n){
                $this->contenu = htmlspecialchars(trim($n));
            }
            
            public function setId($n){
                $this->id = htmlspecialchars(trim($n));
            }
            public function setPhoto($photo){
                $this->photo = htmlspecialchars(trim($photo));
            }
            public function setSelect($n){
                $this->select = htmlspecialchars(trim($n));
            }
            //getters
            public function getNom(){
                return $this->nom;
            }
            public function getPrenom(){
                return $this->prenom;
            }
    
            public static function verifyMail($mail){
                $mail = htmlspecialchars(trim($mail));
                $db = new Database();
                $tab = $db->select("user")
                            ->where("mail","=")
                            ->execute([$mail]);
                // echo count($tab); 
                return count($tab);  
            }
            public function selectUser(){
                // $nom = htmlspecialchars(trim($nom));
                // $mail = htmlspecialchars(trim($mail));
                // $pass = sha1($pass);
                $db = new Database();
                $tab = $db->select("user")
                            ->where("nom","=")
                            ->et("mail","=")
                            ->et("pass","=")
                            ->execute([$this->nom,$this->mail,$this->pass]);
                 
                return $tab;  
            }
            public function insertPub(){
                $db = new Database();
                $table= $db ->select("user")
                            ->where("nom","=")
                            ->et("pass","=")
                            ->et("state","=")
                            ->execute([$_SESSION['user'],$_SESSION['pass'],1]);

                $tab= $db ->select("matiere")
                            ->where("nom","=")
                            ->execute([$_SESSION['matiere']]);
                            
                $db->insert("publication")
                    ->parametters(["titre","contenu","photo","categorie","id_professeur","id_matiere"])
                    ->execute([$this->titre,$this->contenu,$this->photo,$this->categorie,$table[0]->id,$tab[0]->id]); //ou ->execute([$this->getNom(), $this->getPrenom()])
                    // echo $this->nom." ".$this->prenom." ".$this->pass." ".$this->mail;
               
            }
    }
?>