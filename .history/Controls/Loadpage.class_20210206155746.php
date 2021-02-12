<?php
// controlleur pour "loader" des pages
    class Loadpage{
        public function load(){ 
            Controllers::loadView("load.php");
        }
        public function Seconnecter(){
            Controllers::loadView("formIndexview.php");
        }
    }
?>