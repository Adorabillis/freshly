<?php

namespace Controllers;

class TableauDeBordController 
{
	
	use SessionController;
	
		public function __construct()
	{
		$this -> redirectIfNotAdmin();
	}
	
	public function display()
	{
		//afficher le formulaire de connexion
		
            $template = 'views/tableauDeBord.phtml';
            include 'views/layout_front.phtml';
	}

}