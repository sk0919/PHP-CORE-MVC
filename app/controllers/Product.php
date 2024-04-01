<?php



/**
 * Class Product
 *
 * This class is responsible for handling products in our application.
 *
 * @author Sumit Mishra
 */
class Product{

	use Controller;

	/**
	 * Display all products.
	 *
	 * This method fetches all products from the database and displays them.
	 */
	public function index(){
		$products = $this->_fetchAll();

		//$data['username'] = empty($_SESSION['USER']) ? 'User':$_SESSION['USER']->email;

		//here we can add one check - if the user is admin they will able to see the create/update/delete button
		// option is create a separate file for user and admins ; 

		$this->view('product',$products); //showing the product.view.php file
	}


	/**
	 * Add a new product.
	 *
	 * This method handles the POST request to add a new product. It also handles file uploads.
	 */ 
	public function add(){

		if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {

            $uploadDir = 'uploads/'; // Relative path to the uploads folder
            $filename = uniqid() . '_' . $_FILES['image']['name'];
            $targetPath = $uploadDir . $filename;


            if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
                // Save the image path in the database (you can use your Model for this)
                // Example: $this->model->saveImagePath($filename);
				$model = new Product_Model();
	
				$result = $model->insertImageAction($_FILES['image']['name'], "this is description", $targetPath);
				
                echo "Image uploaded successfully!";

            } else {
                echo "Error uploading image.";
            }

        }
	}

	/**
	 * Update a specific product.
	 *
	 * This method should handle the updating of a product's details.
	 */
	public function update(){

	}

	/**
	 * Search for products.
	 *
	 * This method should handle the searching of products.
	 */
	public function searchBy(){
		

	}

	/**
	 * Delete a product.
	 *
	 * This method should handle the deletion of a product.
	 */
	public function delete(){

	}


	/**
	 * Fetch all products.
	 *
	 * This private method fetches all products from the database.
	 *
	 * @return array An array of products.
	 */
	private function _fetchAll(){
		$model = new Product_Model();
		$data = $model->fetchAll();

		if(isset($data) && !empty($data)) return $data;
		else return [];

	}
}