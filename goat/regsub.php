<?php
require('connection.php');



if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    // to check whether input is empty:
    if($firstname == "" || $lastname == "" || $username == "" || $email == "" || $password == "" || $cpassword == ""){
        header('location: ../register.php?error=All fields are required!');
        return false;
    }
    //to check whether the passwords are the same
    if($password != $cpassword) {
        header('location: ../register.php?error=Password Mismatch!');
        return false;
    }

    //to check whether email already exits
    //i.e. select all from database name—users where email = email 
    $check = "SELECT * FROM users WHERE email = '$email'";

    //it is advisable to always query the database 
    $res = mysqli_query($con, $check);
    if(mysqli_num_rows($res) > 0){
        header('location: ../register.php?error=Email already exists!');
        return false;
    }

    $password = md5($password);
    //if res i.e. if result
    $sql = "INSERT INTO users(firstname, lastname, username, email, password) VALUES('$firstname', '$lastname', '$username', '$email', '$password')";
    $res = mysqli_query($con, $sql);

    if($res){
        header('location: ../login.php?success=User successfully registered!');
        return false;
    }else {
        header('location: ../register.php?error=Unable to register!');
        return false;
    }
}
?>