<?php
require('../connection.php');
session_start();


// Clear the cart
unset($_SESSION['cart']);

// Redirect back to the cart
header('Location: ../../cart.php');
exit;

// if(isset($_GET['rmall'])){
//     mysqli_query($con, "DELETE * FROM cart");
//     header('location:.../cart.php');
// }

