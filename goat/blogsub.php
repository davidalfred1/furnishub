<?php
require('connection.php');


if(isset($_POST['rock'])){
    $title = isset($_POST['title']) ? $_POST['title'] : '';
    $author = isset($_POST['author']) ? $_POST['author'] : '';
    $image = isset($_POST['image']) ? $_POST['image'] : '';
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $date = isset($_POST['date']) ? $_POST['date'] : '';


    if(empty($title) || empty($author)){
        header('location: ../admin/dashboard.php?error=All fields required');
        exit();
    }

    $title = cleaner($title, $con);
    $author = cleaner($author, $con);
    $image = cleaner($image, $con);
    $date = cleaner($date, $con);
    $content = cleaner($content, $con);
    $description = cleaner($description, $con);



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

                $dest = './blogimgs/'.$image;

                if(move_uploaded_file($filetmp, $dest)){
                    $date = date('Y-m-d h:i:sa');
                    $sql = "INSERT INTO blog(title, author, image, description, date, content) VALUES('$title','$author','$image', '$description', '$date', '$content')";
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