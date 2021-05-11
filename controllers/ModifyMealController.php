<?php

namespace Controllers;

class ModifyMealController {
    
   	
	use SessionController;

	public function __construct()
	{
		$this -> redirectIfNotAdmin();
		
		//si le formulaire a été soumis
		if(!empty($_POST))
		{
			$this -> submit();
		}
	}
 	public function display()
	{
	    $model = new \Models\Meal();
	    $meal = $model -> findMealById($_GET['id']);
	    $model = new \Models\Category();
	    $categories = $model -> getAllCategory();  
            $template = 'views/modifyMeal.phtml';
            include 'views/layout_front.phtml';
	}
	
	//traitement du formulaire
	public function submit()
	{
		//préparer les données pour les mettre dans la base de données
		$nom = $_POST['name'];
		if (empty($_FILES['img']['name'])) {
			$image = $_POST['imgBdd'];
		}
		else {
			$image = "img/{$_FILES['img']['name']}";
			move_uploaded_file ($_FILES['img']['tmp_name'], $image );
		}
		$alt = $_POST['alt'];
		$id_category = $_POST['category'];
		
		//mettre les datas en bdd
		$model = new \Models\Meal();
		$modifyMeal = $model -> ModifyMeal($_GET['id'], $nom, $image, $alt, $id_category);
		header('location:index.php?page=meal');
			exit;
	}
	
 
}
    