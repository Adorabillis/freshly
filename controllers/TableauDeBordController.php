<?php

namespace Controllers;

class TableauDeBordController {

	public function display()
	{
		//afficher le formulaire de connexion
            $template = 'views/tableauDeBord.phtml';
            include 'views/layout_front.phtml';
	}

}