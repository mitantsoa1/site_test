<?php 
    class PageMatiere{

        public function index(){
            Controllers::loadView("indexView.php");
        }

        public function Malagasy(){
            Controllers::loadView("malagasy.php");
        }

    }
?>