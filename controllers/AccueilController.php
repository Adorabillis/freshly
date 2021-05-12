<?php

namespace Controllers;

class AccueilController
{

	public function display()
	{
		$model = new \Models\ModifyAccueil();
	    $config = $model -> findAllAccueil();
	  
	  
		$model = new \Models\Menu();
	    $menus = $model -> getAllMenus();
		//appeler la vue 
		
		$template = "views/accueil.phtml";
		include 'views/layout_front.phtml';



	}
}