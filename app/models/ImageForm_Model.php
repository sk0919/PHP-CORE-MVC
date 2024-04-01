<?php


class ImageForm_Model extends NewDatabase{

    use Database;
    private $table = '';

    
    //private $pdo = '';

    public function __construct($table) {
        $this->table = $table;
    }

    /**
     *   product_name
     *   description
     *   img_location
     *   created_date
     *   updated_date
     *   deleted_date
     */

    public function insertImage($image_name, $image_description, $image_location){

        Logger::log("we are inside this class ImageForm_Model");

        Logger::log("the name of table is ------- ". $this->table );
        $sql = "INSERT INTO $this->table (product_name, description, img_location, created_date) VALUES (:value1, :value2, :value3, :value4)";

        // Get current date and time in MySQL format
        $currentDateTime = date('Y-m-d H:i:s');


        $conn = $this->connect();

        Logger::log("the sql statement is ---- ".$sql);
        
        $statement = $conn->prepare($sql);
        $statement->bindValue(':value1', $image_name);
        $statement->bindValue(':value2', $image_description);
        $statement->bindValue(':value3', $image_location);
        $statement->bindValue(':value4', $currentDateTime);

        $inserted = $statement->execute();

        if ($inserted) {
            Logger::log("image inserted successfully ");
            echo "Data inserted successfully!";
        } else {
            Logger::log("image not inserted successfully ");
            echo "Error inserting data.";
        }

        Logger::log("before returning anything from ImageForm_model class ");

		return false;
    }
}