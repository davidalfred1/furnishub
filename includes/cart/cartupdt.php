<?php
require('../connection.php');


if(isset($_POST['cartupdt'])){
    $quantity = $_POST['quantity'];
    $prodid = $_POST['[prodid'];
    $query = mysqli_query($con, $quantity, "UPDATE cart SET quantity='$quantity' WHERE prodid='$prodid' ");
    if($query){
        header('location:../../cart.php');
    };
};
					
