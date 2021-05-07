<?php

namespace Controllers;

class MealController {

	public function display()
	{
		//afficher le formulaire de connexion
            $template = 'views/meal.phtml';
            include 'views/layout_front.phtml';
	}

}