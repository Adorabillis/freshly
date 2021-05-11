<?php
//démarrer le système de session
session_start();

//autoloader

//autoloader
spl_autoload_register(function($class){
	
	include str_replace('\\','/',lcfirst($class)).".php";
	
});

//si je n'ai pas un paramètre page
if(!isset($_GET['page']))
{
	//lancer la page d'accueil
	$controller = new Controllers\AccueilController();
	$controller -> display();
}
else
{
	switch($_GET['page'])
	{
		case 'accueil':
			$controller = new Controllers\AccueilController();
			$controller -> display();
			break;
		case 'admin':
			//include 'controllers/AdminController.php';
			$controller = new Controllers\AdminController();
			$controller -> display();
			break;
		case 'tableauDeBord':
			//include 'controllers/TableauDeBordController.php';
			$controller = new Controllers\TableauDeBordController();
			$controller -> display();
			break;
		case 'category':
			$controller = new Controllers\CategoryController();
			$controller -> display();
			break;
		case 'createCategory':
			$controller = new Controllers\AddCategoryController();
			$controller -> display();
			break;
		case 'modifCategory':
			$controller = new Controllers\ModifyCategoryController();
			$controller -> display();
			break;
		case 'deleteCategory':
			$controller = new Controllers\CategoryController();
			$controller -> delete();
			break;
			
		case 'menu':
			$controller = new Controllers\MenuController();
			$controller -> display();
			break;
		case 'gestionMenu':
			$controller = new Controllers\GestionMenuController();
			$controller -> display();
			break;
		case 'createMenu':
			$controller = new Controllers\AddMenuController();
			$controller -> display();
			break;
		case 'modifyMenu':
			$controller = new Controllers\ModifyMenuController();
			$controller -> display();
			break;
		case 'deleteMenu':
			$controller = new Controllers\GestionMenuController();
			$controller -> delete();
			break;
		case 'meal':
			$controller = new Controllers\MealController();
			$controller -> display();
			break;
	}

}