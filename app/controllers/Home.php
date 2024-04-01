<?php 

/**
 * Class Home Controller
 *
 * This class is responsible for landing request.
 *
 * @author Sumit Mishra
 */
class Home
{
	use Controller;

	public function index()
	{

		$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('home',$data);
	}

}
