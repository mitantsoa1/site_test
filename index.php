<?php 
	session_start() ;
	// autoload
	// insertion autoload
	include("CORE/autoload.php") ;
	
	// model
	
	if ($_GET["action"]!="") {
		 
		root::executer($_GET["action"],"error.php") ;

		
	}
	else {
		Controllers::loadView("indexView.php") ;
		
	}
	
	
?>