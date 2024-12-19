<?php
require('../connection.php');
session_start();

// Check if 'id' is set in the query parameters
if (isset($_GET['prodid'])) {
    $prodid = intval($_GET['prodid']);

    // Remove item from the cart if it exists
    if (isset($_SESSION['cart'][$prodid])) {
        unset($_SESSION['cart'][$prodid]);
    }
}

// Redirect back to the cart
header('Location: ../../cart.php');
exit;



