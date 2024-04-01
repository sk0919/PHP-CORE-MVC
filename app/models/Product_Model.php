<?php

 /**
 * Class Product_Model
 *
 * This class is responsible for handling product-related database operations.
 *
 * @author Sumit Mishra
 */
class Product_Model{

    //use Database;

    private $table = 'product';

    /**
     * Insert an image into the database.
     *
     * This method inserts an image record into the database with the provided name, description, and location.
     *
     * @param string $image_name The name of the image.
     * @param string $image_description The description of the image.
     * @param string $image_location The location of the image.
     * @return bool Returns true if the operation was successful.
     */
    public function insertImageAction($image_name, $image_description, $image_location){
        $result = (new ImageForm_Model($this->table))->insertImage($image_name, $image_description, $image_location);
        return true; 
    }

    public function fetch(){

    }

    /**
     * This method responsible for fetching all the records of images from the database
     */
    public function fetchAll(){
        $model = new  NewDatabase();
        $sql = "SELECT * FROM $this->table";
        $result = $model->query($sql);
        Logger::log("fetchAll fnc from product_model ----- ");
        return $result;
    }

    public function fetchByName(){

    }

    
}