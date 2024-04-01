<?php 
date_default_timezone_set('Asia/Kolkata'); 

if($_SERVER['SERVER_NAME'] == 'localhost')
{
	/** database config **/
	define('DBNAME', 'php_core_mvc');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', 'root');
	define('DBDRIVER', 'mysql');
	
	define('ROOT', 'http://localhost/testmvc1/public');
	define('UPLOAD', 'uploads');

	/** true means show errors **/
    define('DEBUG', true);

}else
{
	/** database config **/
	define('DBNAME', 'my_db');
	define('DBHOST', 'localhost');
	define('DBUSER', 'root');
	define('DBPASS', '');
	define('DBDRIVER', 'mysql');

	define('ROOT', 'https://www.yourwebsite.com');

	/** false means hide errors **/
    define('DEBUG', false);

}

define('APP_NAME', "My Website");
define('APP_DESC', "This is a general website");

/** true means show errors **/
//define('DEBUG', true);
