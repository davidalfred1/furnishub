<?php
	require('../goat/connection.php');
?>
<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="author" content="Untree.co">
		<link rel="shortcut icon" href="../favicon.png">

		<meta name="description" content="" />
		<meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="../css/tiny-slider.css" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
        <link href="../assets/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="../assets/glightbox/css/glightbox.min.css" rel="stylesheet">
        <link href="../assets/aos/aos.css" rel="stylesheet">
       

		<title>FurnishHub</title>
    </head>

    <body>
        <div class="container-fluid mt-3">
            <div class="row">
                <div class="col-md-2">
                    <ul class="nav flex-column">
                        <li class="nav-item" style=" hover:background:#3b5d50 !important;">
                        <a class="nav-link text-success hover-text-light " data-bs-toggle="pill" href="#menu1">Product Upload</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-success text-success" data-bs-toggle="pill" href="#menu5">Testimonial Upload</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-success" data-bs-toggle="pill" href="#menu7">Blog Upload</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" data-bs-toggle="pill" href="#menu9">Upload Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" data-bs-toggle="pill" href="#menu10">View Team</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-success" data-bs-toggle="pill" href="#menu2">See Products</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-success" data-bs-toggle="pill" href="#menu8">View Blogs</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link text-success" data-bs-toggle="pill" href="#menu3">See Contacts</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-success" data-bs-toggle="pill" href="#menu6">Newletter Subscribers</a>
                        </li>
                        <!-- <li class="nav-item">
                        <a class="nav-link text-success" data-bs-toggle="pill" href="#menu4">Profile</a>
                        </li> -->
                        <li class="nav-item">
                        <a class="nav-link text-success" href="../goat/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane container active" id="menu1">
                            <div class="row mt-5">
                                <div class="col-lg-12 text-center mb-5">
                                    <h3>Upload Product</h3>
                                </div>
                            </div>
                            <div class="form mt-5">
                                <form action="../goat/productsub.php" class="php-email-form" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control" id="name" placeholder="product name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Price</label>
                                            <input type="text" name="price" class="form-control" id="name" placeholder="price" required>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-md-12">
                                            <label for="">Product Image</label>
                                            <input type="file" name="file" class="form-control"  required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3 mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" class="form-control"></textarea>
                                    </div>
                                    <div class="text-center"><button class="btn btn-dark" type="submit" name="upload">Upload</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane container" id="menu7">
                            <div class="row mt-5">
                                <div class="col-lg-12 text-center mb-5">
                                    <h3>Upload Blog</h3>
                                </div>
                            </div>
                            <div class="form mt-5">
                                <form action="../goat/blogsub.php" class="php-email-form" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Title</label>
                                            <input type="text" name="title" class="form-control" id="" placeholder="blog title" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Author</label>
                                            <input type="text" name="author" class="form-control" id="" placeholder="author name" required>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="form-group col-md-12">
                                            <label for="">Cover photo</label>
                                            <input type="file" name="file" class="form-control" id="" required>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3 mb-3">
                                        <label for="">Description</label>
                                        <textarea name="description" id="" class="form-control"></textarea>
                                    </div>
                                    <div class="form-group mt-3 mb-3">
                                        <label for="">Content</label>
                                        <textarea name="content" id="" class="form-control"></textarea>
                                    </div>
                                    <div class="text-center"><button class="btn btn-dark" type="submit" name="rock">Upload</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu5">
                            <div class="row mt-5">
                                <div class="col-lg-12 text-center mb-5">
                                    <h3>Testimonial Upload</h3>
                                </div>
                            </div>
                            <div class="form mt-5">
                                <form action="../goat/testimonialsub.php" class="php-email-form" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control" id="" placeholder="client name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Profession</label>
                                            <input type="text" name="profession" class="form-control" id="" placeholder="client profession" required>
                                        </div>
                                        
                                    </div>

                                    <div class="row mt-3">
                                        <div class="form-group col-md-12">
                                            <label for="">Client Image</label>
                                            <input type="file" name="file" class="form-control" id="" required>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3 mb-3">
                                        <label for="">Testimonial</label>
                                        <textarea name="testimonial" id="" class="form-control"></textarea>
                                    </div>

                                    <div class="text-center"><button class="btn btn-dark" type="submit" name="drop">Upload</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu9">
                            <div class="row mt-5">
                                <div class="col-lg-12 text-center mb-5">
                                    <h3>Team Members</h3>
                                </div>
                            </div>
                            <div class="form mt-5">
                                <form action="../goat/teamsub.php" class="php-email-form" method="post" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="">Name</label>
                                            <input type="text" name="name" class="form-control" id="" placeholder="member name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Role</label>
                                            <input type="text" name="role" class="form-control" id="" placeholder="role" required>
                                        </div>
                                        
                                    </div>

                                    <div class="row mt-3">
                                        <div class="form-group col-md-12">
                                            <label for="">Cover photo</label>
                                            <input type="file" name="file" class="form-control" id="" required>
                                        </div>
                                    </div>

                                    <div class="form-group mt-3 mb-3">
                                        <label for="">About</label>
                                        <textarea name="about" id="" class="form-control"></textarea>
                                    </div>

                                    <div class="text-center"><button class="btn btn-dark" type="submit" name="drop">Upload</button></div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane container fade" id="menu2">
                            <main id="main">
                                <section id="contact" class="contact mb-5">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col-lg-12 text-center mb-5">
                                                <h3>Uploaded Products</h3>
                                            </div>
                                        </div>

                                        <h2 class="text-center mb-3"></h2>
                                        <div class="form mt-2">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Title</th>
                                                        <th>Price</th>
                                                        <th>Product Image</th>
                                                        <th>Description</th>
                                                        <th>Date Created</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    <?php
                                                    $sql = "SELECT * FROM products";
                                                    $query = mysqli_query($con, $sql);
                                                    foreach($query as $row){
                                                        ?>
                                                    <tr>
                                                        <td><?=$row['prodid']?></td>
                                                        <td><?=$row['title']?></td>
                                                        <td><?=$row['price']?></td>
                                                        <td><img class="img-fluid" style= "width: 100px;" src="../goat/prodimgs/<?=$row['image']?>" alt="" srcset=""></td>
                                                        <td><?=$row['description']?></td>
                                                        <td><?=$row['date']?></td>
                                                        <td><a class="btn btn-success" href="../update.php?update=<?=$row['id']?>">Update</a></td>
                                                        <td><a href="../goat/proddeletesub.php?delete=<?=$row['prodid']?>" class="btn btn-danger">delete</a></td>
                                                    </tr>
                                                    <?php }?>      
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </main>
                        </div>
                        <div class="tab-pane container fade" id="menu10">
                            <main id="main">
                                <section id="contact" class="contact mb-5">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col-lg-12 text-center mb-5">
                                                <h3>Team Members</h3>
                                            </div>
                                        </div>

                                        <h2 class="text-center mb-3"></h2>
                                        <div class="form mt-2">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Name</th>
                                                        <th>Role</th>
                                                        <th>Image</th>
                                                        <th>About</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    <?php
                                                    $sql = "SELECT * FROM team";
                                                    $query = mysqli_query($con, $sql);
                                                    foreach($query as $row){
                                                        ?>
                                                    <tr>
                                                        <td><?=$row['id']?></td>
                                                        <td><?=$row['name']?></td>
                                                        <td><?=$row['role']?></td>
                                                        <td><img class="img-fluid" style= "width: 100px;" src="../goat/teamimgs/<?=$row['image']?>" alt="" srcset=""></td>
                                                        <td><?=$row['about']?></td>
                                                        <td><a class="btn btn-success" href="../update.php?update=<?=$row['id']?>">Update</a></td>
                                                        <td><a href="../goat/proddeletesub.php?delete=<?=$row['id']?>" class="btn btn-danger">delete</a></td>
                                                    </tr>
                                                    <?php }?>      
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </main>
                        </div>
                        <div class="tab-pane container fade" id="menu8">
                            <main id="main">
                                <section id="contact" class="contact mb-5">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col-lg-12 text-center mb-5">
                                                <h3>Uploaded Blogs</h3>
                                            </div>
                                        </div>

                                        <h2 class="text-center mb-3"></h2>
                                        <div class="form mt-2">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Title</th>
                                                        <th>Author</th>
                                                        <th>Cover photo</th>
                                                        <th>Description</th>
                                                        <th>Content</th>
                                                        <th>Date</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                    <?php
                                                    $sql = "SELECT * FROM blog";
                                                    $query = mysqli_query($con, $sql);
                                                    foreach($query as $row){
                                                        ?>
                                                    <tr>
                                                        <td><?=$row['id']?></td>
                                                        <td><?=$row['title']?></td>
                                                        <td><?=$row['author']?></td>
                                                        <td><img class="img-fluid" style= "width: 100px;" src="../goat/blogimgs/<?=$row['image']?>" alt="" srcset=""></td>
                                                        <td><?=$row['description']?></td>
                                                        <td><?=$row['content']?></td>
                                                        <td><?=$row['date']?></td>
                                                        <td><a class="btn btn-success" href="../update.php?update=<?=$row['id']?>">Update</a></td>
                                                        <td><a href="../goat/blogdelsub.php?delete=<?=$row['id']?>" class="btn btn-danger">delete</a></td>
                                                    </tr>
                                                    <?php }?>      
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                            </main>
                        </div>
                        <div class="tab-pane container fade" id="menu3">
                            <main id="main">
                                <section id="contact" class="contact mb-5">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col-lg-12 text-center mb-5">
                                                <h3>Contacts & Messages</h3>
                                            </div>
                                        </div>
                                        <h2 class="text-center mb-3"></h2>
                                        <div class="form mt-2">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>Firstname</th>
                                                        <th>Lastname</th>
                                                        <th>Email</th>
                                                        <th>Message</th>
                                                        <th>Date</th>
                                                        <th>Reply</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <?php
                                                        $sql = "SELECT * FROM contact";
                                                        $query = mysqli_query($con, $sql);
                                                        foreach($query as $row){
                                                    ?>
                                                    <tr>
                                                        <td><?=$row['id']?></td>
                                                        <td><?=$row['firstname']?></td>
                                                        <td><?=$row['lastname']?></td>
                                                        <td><?=$row['email']?></td>
                                                        <td><?=$row['message']?></td>
                                                        <td><?=$row['date']?></td>
                                                        <td><a class="btn btn-success" href="./update.php?reply=<?=$row['id']?>">Reply</a></td>
                                                        <td><a href="../goat/contactdeletesub.php?delete=<?=$row['id']?>" class="btn btn-danger">delete</a></td>
                                                    </tr>
                                                    <?php }?>      
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </main>
                        </div>
                        <div class="tab-pane container fade" id="menu6">
                            <main id="main">
                                <section id="contact" class="contact mb-5">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col-lg-12 text-center mb-5">
                                                <h3>Newsletter Subscribers</h3>
                                            </div>
                                        </div>
                                        <h2 class="text-center mb-3"></h2>
                                        <div class="form mt-2">
                                            <div class="table-responsive">
                                                <table class="table table-hover table-bordered">
                                                    <tr>
                                                        <th>S/N</th>
                                                        <th>name</th>
                                                        <th>Email</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    <?php
                                                        $sql = "SELECT * FROM newsletter";
                                                        $query = mysqli_query($con, $sql);
                                                        foreach($query as $row){
                                                    ?>
                                                    <tr>
                                                        <td><?=$row['id']?></td>
                                                        <td><?=$row['name']?></td>
                                                        <td><?=$row['email']?></td>
                                                        <td><a href="../goat/newsletterdelsub.php?delete=<?=$row['id']?>" class="btn btn-danger">delete</a></td>
                                                    </tr>
                                                    <?php }?>      
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </main>
                        </div>
                    
                        <!-- <div class="tab-pane container fade" id="menu4">                        
                            <main id="main">
                                <section id="contact" class="contact mb-5">
                                    <div class="container">
                                        <div class="row mt-5">
                                            <div class="col-lg-12 text-center mb-5">
                                                <h3>My Profile</h3>
                                            </div>
                                        </div>
                                        <div class="form mt-5">
                                            <form action="" class="php-email-form ">
                                                <div class="form-group mt-3">
                                                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                                </div>
                                                <div class="form-group mt-3">
                                                    <button class="btn btn-hover form-control" type="submit">Edit Now</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </section>
                                
                            </main>
                        </div>         -->
                    </div>
                </div>
            </div>
        </div>
		<script src="../js/bootstrap.bundle.min.js"></script>
		<script src="../js/tiny-slider.js"></script>
		<script src="../js/custom.js"></script>
	</body>
</html>