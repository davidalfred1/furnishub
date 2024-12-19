<?php
require('connection.php');


if(isset($_GET['delete'])){
    $delete = $_GET['delete'];
    $sql = "DELETE FROM products WHERE prodid=$delete";
    $query = mysqli_query($con, $sql);
    if($query){
        header('location: ../admin/dashboard.php?Successfully Deleted!');
        exit();
    }
}
