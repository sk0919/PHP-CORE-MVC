<?php


/**
 * Class Services Controller
 *
 * This class is responsible for handling the services info our application.
 *
 * @author Sumit Mishra
 */
class Services{
	

	use Controller;

	public function index()
	{

		$data = [];
		//$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('services',$data);
	}
}