<?php

namespace Controllers;

class AccueilController
{

	public function display()
	{
		$model = new \Models\ModifyAccueil();
	    $config = $model -> findAllAccueil();
	  
		//appeler la vue 
		$model = new \Models\Slider();
		$sliders = $model -> getAllSlider();
		$template = "views/accueil.phtml";
		include 'views/layout_front.phtml';



	}
}