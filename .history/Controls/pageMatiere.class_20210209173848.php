<?php 
    class PageMatiere{

        public function index(){
            Controllers::loadView("indexView.php");
        }

        public function malagasy(){
            Controllers::loadView("malagasy.php");
        }

    }
?>