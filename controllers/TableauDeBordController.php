<?php

namespace Controllers;

class TableauDeBordController {
	

	public function display()
	{
		if(!isset($_SESSION['admin']))
	{
		    header('location:index.php?page=admin');
			exit;
	}
	else 
	{
		//afficher le formulaire de connexion
            $template = 'views/tableauDeBord.phtml';
            include 'views/layout_front.phtml';
	}

}}

