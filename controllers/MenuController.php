<?php

namespace Controllers;

class MenuController
{
	
	public function display()
	{
		
		//appeler la vue 
		
		$template = "views/menus.phtml";
		include 'views/layout_front.phtml';

	}
}