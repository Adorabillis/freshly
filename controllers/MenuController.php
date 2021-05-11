<?php

namespace Controllers;

class MenuController
{
	
		use SessionController;
	
		public function __construct()
	{
		$this -> redirectIfNotAdmin();
	}
	
	public function display()
	{
		
		//appeler la vue 
		
		$template = "views/menus.phtml";
		include 'views/layout_front.phtml';

	}
}