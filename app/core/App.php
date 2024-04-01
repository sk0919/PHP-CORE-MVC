<?php

/**
 * Class App
 *
 * This class is responsible for handling the requests and url
 *
 * @author Sumit Mishra
 */
class App {
	private $controller = 'Home';
	private $method 	= 'index';

	private function splitURL() {
		$URL = $_GET['url'] ?? 'home';
		$URL = explode("/", trim($URL,"/"));
		return $URL;	
	}

	public function loadController() {
		$URL = $this->splitURL();
		
		/** select controller **/
		$filename = "../app/controllers/".ucfirst($URL[0]).".php";

		if(file_exists($filename)) {
			require $filename;
			$this->controller = ucfirst($URL[0]);
			unset($URL[0]);
		}else{
	
			$filename = "../app/controllers/FileNotFound.php";
			require $filename;
			$this->controller = "FileNotFound";
		}

		$controller = new $this->controller;

		/** select method **/
		if(!empty($URL[1])) {

			if(method_exists($controller, $URL[1])) {
				$this->method = $URL[1];
				unset($URL[1]);
			}	

		}

		call_user_func_array([$controller,$this->method], $URL);
	}	

}


