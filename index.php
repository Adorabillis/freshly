<?php
//démarrer le système de session
session_start();

//autoloader

spl_autoload_register(function($controller){
    $controller = str_replace('\\', '/', $controller);
    $controller = str_replace('Controllers', 'controllers', $controller);
    include $controller.'.php';
});

//spl_autoload_register(function($class){
//	include "controllers/$class.php";
	
//});

//include "controllers/AccueilController.php";

include 'models/Database.php';
include 'models/Category.php';


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
		case 'meal':
			$controller = new Controllers\MealController();
			$controller -> display();
			break;
	}

}