<?php
require('goat/connection.php');
?>

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
            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            <link href="css/tiny-slider.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
            <title>FurnishHub</title>
    </head>
    <body>
        <div class="container text-white form-group rounded-4 p-4 mt-5" style="width:500px; background: #3b5d50;">
            <h2 class="text-center">Update Product</h2>
            <div class="form mt-5">
                <form action="../goat/updatesub.php" class="php-email-form" method="post" enctype="multipart/form-data"> 
                    <?php   
                         if(isset($_GET['update'])){
                             $uid =$_GET['update'];
                             $sql = "SELECT * FROM products WHERE id =$uid";
                             $query = mysqli_query($con, $sql);
                             $row= mysqli_fetch_assoc($query);
                         }
                    ?>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Title</label>
                            <input type="text" name="title" value="<?=$row['title']?>" class="form-control" id="name" placeholder="product name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Price</label>
                            <input type="text" name="price" value="<?=$row['price']?>" class="form-control" id="name" placeholder="price" required>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="form-group col-md-12">
                            <label for="">Product Image</label>
                            <input value="goat/prodimgs/<?=$row['image']?>" type="file" name="file"  class="form-control" id="name" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <label for="">description</label>
                        <textarea name="description" value="" id="" class="form-control"><?=$row['description']?></textarea>
                    </div>
                    <div class="text-center mt-5">
                        <button class="btn btn-dark btn-hover" type="submit" name="update">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/tiny-slider.js"></script>
        <script src="js/custom.js"></script>
    </body>
</html>