<?php

class Controller_Post extends Controller
{
	
	function action_index()
	{
		$this->view->generate('post_view.php', 'template_view.php');
	}

}