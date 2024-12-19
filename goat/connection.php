<?php
// $server = "sql105.infinityfree.com";
// $username = "if0_37254202";
// $password = "vTbmf8vwm5";
// $dbname = "if0_37254202_furnishub";
$server = "localhost";
$username = "root";
$password = "";
$dbname = "furnishub";
$con = mysqli_connect($server, $username, $password, $dbname);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

function cleaner($data, $con){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($con, $data);
    return $data;
}