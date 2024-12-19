<?php
session_start();
require('connection.php');
 
// Check if user is already logged in
if (isset($_SESSION['userid'])) {
    header('Location: ../index.php'); // Redirect to shop page if already logged in
    exit;
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    if($email == "" || $password == ""){
        header('location: ../login.php?error=All_fields_are_required!');
        return false;
    }
    
    //cleaning user input
    //$email = cleaner($email, $con);
    //$password = cleaner($password, $con);
    
    //encrypting password
    //$password = md5($password);
    $password = md5($password);
    
    
    $check = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($con, $check);
    
    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $_SESSION['userid'] = $row['userid'];
        $_SESSION['username'] = $row['username'];
        setcookie("userid", $row['userid'], time() + 3600);
        $_COOKIE['userid'] = $row['userid'];

        header('location: ../index.php?success=Login_Successful!');
        return false;
    }else {
        header('location: ../login.php?error=User_does_not_exist!');
        return false;
    }
}

?>

