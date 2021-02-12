<?php 
	class Controllers{
		public static function loadView($page){
			$page = htmlspecialchars(trim($page)) ;
			include("Views/".$page) ;
		}
		// pour inclure les portions de page
		public static function includeTemplate($template){
			$template = htmlspecialchars(trim($template)) ;
			include("Views/template-part/".$template);
		}
		// pour inclure du JavaScript
		public static function includeScript($tab) {
			$script="" ;
			for ($i=0; $i <count($tab) ; $i++) { 
				$code =htmlspecialchars(trim($tab[$i])) ;
				$script .= "<script src='Publics/js/".$code."'></script>" ;
				
			}
			echo $script ;
		}
	}

 ?>

 