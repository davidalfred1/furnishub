<?php
require('connection.php');


if(isset($_GET['delete'])){
    $delete = $_GET['delete'];
    $sql = "DELETE FROM newsletter WHERE id=$delete";
    $query = mysqli_query($con, $sql);
    if($query){
        header('location: ../admin/dashboard.php#menu6?Successfully Deleted!');
        exit();
    }
}
