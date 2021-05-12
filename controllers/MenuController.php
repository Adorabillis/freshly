<?php

namespace Controllers;

class MenuController
{
	
	
	public function display()
	{
		
		
		$model = new \Models\Menu();
	    $menus = $model -> getAllMenus();
		
		$template = "views/menu.phtml";
		include 'views/layout_front.phtml';

	}
}