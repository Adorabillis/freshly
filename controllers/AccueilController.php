<?php

namespace Controllers;

class AccueilController
{
	public function display()
	{
		
		//appeler la vue 
		
		$template = "views/accueil.phtml";
		include 'views/layout_front.phtml';



	}
}