<!-- product.view.php -->

<?php include 'common/header.view.php'; ?>

<h1>our product page content here </h1>


    <div class="product-container-view">
        <div class="handle-product">
            <!-- Button to open the dialog box -->
            <?php include 'common/image_upload_form.view.php'; ?>
            <button id="create-product-dialog" class="create-button">Create</button>
        </div>
       
        <div class="product-container">
            <?php //show($data);?>
            <?php if (!empty($data)): ?>
                    <!-- <p>product found.</p> -->
                    <?php foreach($data as $row) : ?>

                        <?php 
                            $rowColumns = (array)$row; // Convert object to array  
                            extract($rowColumns); // Extract variables from the array
                            $img_location = str_replace('../', ROOT . '/', $img_location);
                        ?>

                        <div class="items-info">
                            <div class="item">
                                <?php 
                                    $style = 'max-width: 100%; height: auto; object-fit: cover; object-position: center center;';
                                    echo "<img src='{$img_location}' alt='{$product_name}' style='{$style}' ><br>";
                                    echo "Product Name: " . $product_name . "<br>";
                                    echo "Description: " . $description . "<br>";
                                ?>
                            </div>

                            <div class="item-container-button">
                                <button class="yellow-btn">Update</button>
                                <button class="red-btn">Delete</button>
                            </div>
                        </div>

                    <?php endforeach; ?>
                <?php else : ?>
                    <p>No product found.</p>
            <?php endif; ?>
            <?php unset($data, $style); ?>
        </div>
            
    </div>

<?php include 'common/footer.view.php'; ?>

<?php

/*
$items = ['Apple', 'Banana', 'Cherry', 'Date', 'Fig', 'Grape'];

<div class="container">
    <?php foreach ($items as $item) { ?>
        <div class="item"><?php echo $item; ?></div>
    <?php } ?>
</div>

*/

?>

<script type="text/javascript"  src="<?=ROOT?>/assets/js/form.js"></script>

