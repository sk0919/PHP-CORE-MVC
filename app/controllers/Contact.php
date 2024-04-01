<?php 

/**
 * Class Contact Controller
 *
 * This class is responsible for delivering the contact info.
 *
 * @author Sumit Mishra
 */
class Contact
{
	use Controller;

	public function index()
	{
        $data =[];
		//$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		$this->view('contact',$data);
	}

}