<?php
require('../connection.php');
session_start();

 var_dump($_SESSION);

    // Check if the user is logged in
    if (!isset($_SESSION['userid'])) {
        // User is not logged in, redirect to the login page
        header('Location: ../../login.php?error=login_required!');
        exit;
    }

    
    if(isset($_POST['add'])){
            // Sample item data
            $prodid = $_POST['prodid'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $quantity = $_POST['quantity'];
            $image = $_POST['image']; 

            // Check if the cart session variable is set
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = array();
            }

            // Add or update the item in the cart
            if (isset($_SESSION['cart'][$prodid])) {
                $_SESSION['cart'][$prodid]['quantity'] += $quantity;
            } else {
                $_SESSION['cart'][$prodid] = array(
                    'title' => $title,
                    'price' => $price,
                    'quantity' => $quantity,
                    'image' => $image
                );
            }
            
            // Redirect back to the items list
            header('Location: ../../shop.php');
            exit;
        }
    



    
    
    
    
    
    