<?php

namespace Controllers;

class MealController {
	
	use SessionController;
	
	public function __construct()
	{
		$this -> redirectIfNotAdmin();
	}

	public function display()
	{
		//afficher les plats
		$model = new \Models\Meal();
		$meals = $model -> getAllMeals();
		$model = new \Models\Category();
		$categories = $model -> getAllCategory();
            $template = 'views/meal.phtml';
            include 'views/layout_front.phtml';
	}
	
		public function delete()
	{
	    $model = new \Models\Meal();
	    $model -> deleteMeal($_GET['id']);
	}

}