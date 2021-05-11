<?php

namespace Controllers;

class AccueilController
{
	use SessionController;
	
		public function __construct()
	{
		$this -> redirectIfNotAdmin();
	}
	
	public function display()
	{
		
		//appeler la vue 
		
		$template = "views/accueil.phtml";
		include 'views/layout_front.phtml';



	}
}