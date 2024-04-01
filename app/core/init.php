<?php 

spl_autoload_register(function($classname){

	require $filename = "../app/models/".ucfirst($classname).".php";
});

require 'config.php';
require 'utils.php';
require 'Database.php';
require 'Model.php';
require 'Controller.php';
require 'NewDatabase.php';
require 'Logger.php';
require 'App.php';