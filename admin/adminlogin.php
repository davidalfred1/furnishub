<?php 
require('../includes/connection.php');
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
            <link href="../css/bootstrap.min.css" rel="stylesheet">
            <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
            <link href="../css/tiny-slider.css" rel="stylesheet">
            <link href="../css/style.css" rel="stylesheet">
            <title>FurnishHub</title>
    </head>

    <body>
        <div class="container mt-5 form-group p-4 text-white" style="width:500px; background: #3b5d50;">
                <h1 class="text-center">Login</h1>
                <form action="../includes/loginsub.php" method="post">
                        <div class="mt-3">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div> 
                        <div class="mt-3">
                            <label for="">Password</label>
                            <input type="password" name="password"  class="form-control">
                        </div> 
                        <div><p>No account? <a href="register.php" class="text-white" style="text-decoration:none">register!</a></p></div>
                        <div class="">
                            <input type="submit" name="login" class="btn btn-success form-control">
                        </div>
                </form>
        </div>
    </body>
</html>