<?php

//abstract class NewDatabase{
class NewDatabase{

    public function connect(){
		$string = "mysql:hostname=".DBHOST.";dbname=".DBNAME;
		$conn = new PDO($string, DBUSER, DBPASS);
		return $conn;
	}

    // public function insert($query){
    //     $conn = $this->connect();
	// 	$stm = $conn->prepare($query);
    // }

	public function query($query, $data = [] ) {

		$conn = $this->connect();

		$stm = $conn->prepare($query);

		// $check = $stm->execute($data);
		$check = $stm->execute();

		Logger::log("query method of new database file  ----- fetching all the images");
		$products = $stm->fetchAll(PDO::FETCH_OBJ);
		return $products;
		// Logger::log("query method of new database file  ----- before the loop");

		// show($stm->fetchAll(PDO::FETCH_OBJ)); 
        // while($row = $stm->fetchAll(PDO::FETCH_OBJ)) {
        //     $products[] = $row;
		// }
		// Logger::log("query method of new database file  ----- after  the loop ");

		// return $products;
		/*
		if($check) {
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if(is_array($result) && count($result)) {
				return $result;
			} 
		}

		//return [];
		*/
	}

	public function get_row($query, $data = [])
	{

		$con = $this->connect();
		$stm = $con->prepare($query);

		$check = $stm->execute($data);
		if($check)
		{
			$result = $stm->fetchAll(PDO::FETCH_OBJ);
			if(is_array($result) && count($result))
			{
				return $result[0];
			}
		}

		return false;
	}
}