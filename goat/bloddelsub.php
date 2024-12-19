<?php 
require('connection.php');


if(isset($_GET['delete'])){
    $delete = $_GET['delete'];
    $sql = "DELETE FROM blog WHERE blogid=$delete";
    $query = mysqli_query($con, $sql);
    if($query){
        header('location: ../admin/dashboard.php#menu=8?Successfully Deleted!');
        exit();
    }
}