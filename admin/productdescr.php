<?php
require('../includes/connection.php');
?>

<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="author" content="Untree.co">
        <link rel="shortcut icon" href="favicon.png">

        <meta name="description" content="" />
        <meta name="keywords" content="bootstrap, bootstrap4" />

        <!-- Bootstrap CSS -->
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link href="../css/tiny-slider.css" rel="stylesheet">
        <link href="../css/style.css" rel="stylesheet">
        <title>Furni Free Bootstrap 5 Template for Furniture and Interior Design Websites by Untree.co </title>
    </head>
    <body> 
        <?php  
            $sql = "SELECT * FROM products";
            $query = mysqli_query($con, $sql);
            foreach($query as $row){
        ?>
        <div class="container">
            <h3 class="product-title"><?=$row['title']?></h3>
            <a class="product-item" href="cart.php">
				<img src="../includes/prodimgs/<?=$row['image']?>" class="img-fluid product-thumbnail">
				<strong class="product-price"><?=$row['price']?></strong>
                <p><?=$row['description']?></p>
				<span class="icon-cross">
					<img src="../images/cross.svg" class="img-fluid"/>
				</span>
			</a>
        </div>
        <?php } ?> 
        <script src="../js/bootstrap.bundle.min.js"></script>
		<script src="../js/tiny-slider.js"></script>
		<script src="../js/custom.js"></script>
    </body>
</html>