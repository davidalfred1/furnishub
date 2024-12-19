<?php
require('connection.php');

if(isset($_POST['contactsub'])){
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    //cleaning input field
    $firstname = cleaner($firstname, $con);
    $lastname = cleaner($lastname, $con);
    $email = cleaner($email, $con);
    $message = cleaner($message, $con);
    
    // to check whether input is empty:
    if($firstname == "" || $lastname == "" || $email == "" || $message == ""){
        header('location: ../contact.php?error=All fields are required!');
        return false;
    }
     
    $sql = "INSERT INTO contact(firstname, lastname, email, message, date) VALUES('$firstname', '$lastname', '$email', '$message', '$date')";
    $query = mysqli_query($con, $sql);

    if($query){
        header('location: ../index.php?Success=Message sent!');
        return false;
    }else {
        header('location: ../contact.php?error=Unable to send message!');
        return false;
    }
} 


?>