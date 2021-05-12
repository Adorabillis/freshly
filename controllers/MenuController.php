<?php

namespace Controllers;

class MenuController
{
	
	
	public function display()
	{
		
		//appeler la vue 
		
		$template = "views/menu.phtml";
		include 'views/layout_front.phtml';

	}
}