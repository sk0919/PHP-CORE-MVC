<?php 

/**
 * Class About Controller
 *
 * This class is responsible for delivering the info our application, product and services.
 *
 * @author Sumit Mishra
 */
class About {
	use Controller;

	public function index() {
        $data =[];
		//$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('about',$data);
	}

}