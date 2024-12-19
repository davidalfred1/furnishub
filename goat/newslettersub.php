<?php 
require('connection.php');


if(isset($_POST['fly'])){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';

    //cleaning input field
    $name = cleaner($name, $con);
    $email = cleaner($email, $con);
    
    // to check whether input is empty:
    if(empty($name) || empty($email)){
        header('location: ../index.php?error=All fields are required!');
        return false;
    }
     
    $sql = "INSERT INTO newsletter(name, email) VALUES('$name', '$email')";
    $query = mysqli_query($con, $sql);

    if($query){
        header('location: ../index.php?Success=Message sent!');
        return false;
    }else {
        header('location: ../index.php?error=Unable to send message!');
        return false;
    }
} 
