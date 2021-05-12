<?php

namespace Controllers;

class AccueilController
{

	public function display()
	{
		$model = new \Models\ModifyAccueil();
	    $config = $model -> findAllAccueil();
	    
	    $model1 = new \Models\Meal();
		$meals = $model1 -> getAllMeals();
	  
		//appeler la vue 
		$model = new \Models\Slider();
		$sliders = $model -> getAllSlider();
		$template = "views/accueil.phtml";
		include 'views/layout_front.phtml';



	}
}