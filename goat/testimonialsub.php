<?php
require('connection.php');


if(isset($_POST['drop'])){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $testimonial = isset($_POST['testimonial']) ? $_POST['testimonial'] : '';
    $profession = isset($_POST['profession']) ? $_POST['profession'] : '';

    if(empty($name) || empty($testimonial) || empty($profession)){
        header('location: ../admin/dashboard.php?error=All fields required!');
        exit();
    }

    $name = cleaner($name, $con);
    $image = cleaner($image, $con);
    $testimonial = cleaner($testimonial, $con);
    $profession = cleaner($profession, $con);
   

    //processing files
    
    if($_FILES['file']['name'] !== ""){
        // get file name
        $filename = $_FILES['file']['name'];
        // get file size
        $filesize = $_FILES['file']['size'];
        //get temp location
        $filetmp = $_FILES['file']['tmp_name'];
        // get file extension
        $fileext = explode('.', $filename);
        // file actual extenstion
        $fileactual = strtolower(end($fileext));
        //allowed file
        $allowed = array('jpg','jpeg','png','gif','svg');

        if($filesize < 800000){
            if(in_array($fileactual, $allowed)){

                $image = uniqid('', true) . '' . $filename;

                $dest = './testyimgs/'.$image;

                if(move_uploaded_file($filetmp, $dest)){
                    $date = date('Y-m-d h:i:sa');
                    $sql = "INSERT INTO testimonial (name, image, testimonial, profession) VALUES('$name', '$image', '$testimonial', '$profession')";
                    $query = mysqli_query($con, $sql);
                    if($query){
                        header('location: ../admin/dashboard.php?success=Post Successfull');
                        exit();
                    }
                }else{
                    header('location: ../admin/dashboard.php?error=Could Not Insert File');
                    exit();
                }
            }else{
                header('location: ../admin/dashboard.php?error=File Not Supported');
                exit();
            }
        }else{
            header('location: ../admin/dashboard.php?error=File Too Large');
            exit();
        }
    }else {
        header('location: ../admin/dashboard.php?error=File Not Found');
        exit();
    }
}else {
    header('location: ../admin/dashboard.php?error=Not Set');
    exit();
}