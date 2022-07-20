<?php

class Controller_Admin extends Controller
{
	
	function action_index()
	{
		session_start();
		$model = new Model_admin();
		$data = $model->get_naw();
		

		// if ( $_SESSION['admin'] == "12345" )
		// {
			$this->view->generate('admin_view.php', 'template_view.php',$data);
		// }
		// else
		// {
		// 	session_destroy();
		// 	Route::ErrorPage404();
		// }

	}
	
	
	// function action_logout()
	// {
	// 	session_start();
	// 	session_destroy();
	// 	header('Location:/');
	// }

}
