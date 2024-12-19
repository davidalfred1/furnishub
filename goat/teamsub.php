<?php
require('connection.php');

if(isset($_POST['drop'])){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';
    $about = isset($_POST['about']) ? $_POST['about'] : '';

    if(empty($name) && empty($about) ){
        header('location: ../admin/dashboard.php?error=All fields required');
        exit();
    }

    $name = cleaner($name, $con);
    $image = cleaner($image, $con);
    $role = cleaner($role, $con);
    $about = cleaner($about, $con);

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

                $dest = './teamimgs/'.$image;

                if(move_uploaded_file($filetmp, $dest)){
                    $date = date('Y-m-d h:i:sa');
                    $sql = "INSERT INTO team (name, image, role, about) VALUES('$name','$image','$role', '$about')";
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