<?php 
    class User{
            private $nom,$prenom,$id,$pass,$mail;
    
            //setters
            public function setNom($n){
                $this->nom = htmlspecialchars(trim(ucwords($n)));
            }
            public function setPrenom($n){
                $this->prenom = htmlspecialchars(trim($n));
            }
            public function setPass($n){
                $this->pass = sha1($n);
            }
            public function setId($n){
                $this->id = htmlspecialchars(trim($n));
            }
            public function setMail($n){
                $this->mail = htmlspecialchars(trim($n));
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
            public static function verify($nom,$mail,$pass){
                $nom = htmlspecialchars(trim($nom));
                $mail = htmlspecialchars(trim($mail));
                $pass = sha1($pass);
                $db = new Database();
                $tab = $db->select("user")
                            ->where("nom","=")
                            ->et("mail","=")
                            ->et("pass","=")
                            ->execute([$nom,$mail,$pass]);
                // echo count($tab); 
                return count($tab);  
            }
            public function insertUser(){
                $db = new Database();
                $db->insert("user")
                    ->parametters(["nom","prenom","pass","mail"])
                    ->execute([$this->nom,$this->prenom,$this->pass,$this->mail]); //ou ->execute([$this->getNom(), $this->getPrenom()])
                    // echo $this->nom." ".$this->prenom." ".$this->pass." ".$this->mail;
               
            }
    }
?>