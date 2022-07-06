<?php

class Controller_Main extends Controller
{

	function action_index()
	{	
		$model = new Model_news();
		$data = $model->get_news();
		
	
		$this->view->generate('main_view.php', 'template_view.php',$data);

	}
	
// все записи
	// function test() {
	// 	$model = new Model_News();
	// 		$r = $model->getAllRows();
	// 		var_dump($r);exit;
	// }
}

