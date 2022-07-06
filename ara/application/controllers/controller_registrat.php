<?php
class Controller_Registrat extends Controller
{

	function action_index()
	{	
		$this->view->generate('registrat_view.php', 'template_view.php');
	}
}