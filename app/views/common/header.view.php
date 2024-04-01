<!-- header.view.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css"> <!-- Link to your main CSS file -->
    <title>Your Website</title>
    <link href="<?=ROOT?>/assets/css/header.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/footer.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/style.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/product.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/services.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/contact.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/about.css" rel="stylesheet">
    <link href="<?=ROOT?>/assets/css/form.css" rel="stylesheet">
    <script>
        //getting the root url
        const ROOT_URL = '<?php echo ROOT; ?>';
    </script>
</head>
<body>
    <div class="header">
        <!-- <div class="logo-image"></div>
        <a href="<?=ROOT?>/" class="logo logo-text">CompanyLogo</a> -->
        <a href="<?=ROOT?>/" class="logo-image"></a>
        <div class="header-right">
            <a href="<?=ROOT?>/home">Home</a>
            <a href="<?=ROOT?>/product">Products</a>
            <a href="<?=ROOT?>/services">Services</a>
            <a href="<?=ROOT?>/about">About us</a>
            <a href="<?=ROOT?>/contact">Contact us</a>    
        </div>
    </div>

