<?php

namespace Controllers;

class AddMealController {
    
   	
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
	    $model = new \Models\Category();
	    $categories = $model -> getAllCategory();
            $template = 'views/addMeal.phtml';
            include 'views/layout_front.phtml';
	}
	
	//traitement du formulaire
	public function submit()
	{
		//préparer les données pour les mettre dans la base de données
		$nom = $_POST['name'];
		$image = "img/menus/{$_FILES['img']['name']}";
		$alt = $_POST['alt'];
		$id_category = $_POST['category'];
		
		//upload mon image
		move_uploaded_file ($_FILES['img']['tmp_name'], $image );
		
		
		
		//mettre les datas en bdd
		$model = new \Models\Meal();
		$model -> AddMeal($nom, $image, $alt, $id_category);
		header('location:index.php?page=meal');
			exit;
	}
	
 
}
    