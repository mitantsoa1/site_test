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
            public function insertUser(){
                $db = new Database();
                $db->insert("user")
                    ->parametters(["nom","prenom","pass","mail","state"])
                    ->execute([$this->nom,$this->prenom,$this->pass,$this->mail,$this->select]); //ou ->execute([$this->getNom(), $this->getPrenom()])
                    // echo $this->nom." ".$this->prenom." ".$this->pass." ".$this->mail;
               
            }
    }
?>