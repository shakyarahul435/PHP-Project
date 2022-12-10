<?php
include './backend/connect.php';
session_start();
// $_SESSION['name']=apple;
//  echo $_SESSION[name];
// echo $_SESSION['email'];
// echo $_SESSION['apple'];
//echo $_SESSION['email'];
if(isset($SESSION['done'])){
   /* echo $_SESSION[$email];*/
    echo $_SESSION['email'];
    // echo $_SESSION['email']=$email;
}
// $SESSION['email'] = $email;
// echo $email;
// echo $_SESSION["$email"];


  // if($check !== false) {
  //   echo "File is an image - " . $check["mime"] . ".";
  //   $uploadOk = 1;
  // } else {
  //   echo "File is not an image.";
  //   $uploadOk = 0;
  // }


if(isset($_POST['done'])){
 $filename = $_FILES["fileToUpload"]["name"];

    $tempname = $_FILES["fileToUpload"]["tmp_name"];  

        $folder = "uploads/".$filename;  

    


                $jewelry = $_POST['jewelry'];

       
                if ($jewelry!=0) {
                    echo "<script>alert('Submitted Successfully!')</script>";
                    
                }else{
                     echo "<script>alert('Couldn't Submit!')</script>";
                 
                
                 }

   if (move_uploaded_file($tempname, $folder)) {

            $msg = "Image uploaded successfully";

        }else{

            $msg = "Failed to upload image";

    }
    // echo "<script>alert('insert called')</script>";
    // $username = $_POST['username'];
    $email= $_SESSION['email'];
    // $password= $_POST['password'];
    $jewelry= $_POST['jewelry'];
    $jewelryWedding= $_POST['jewelryWedding'];
    $jewelryNecklace= $_POST['jewelryNecklace'];
    $jewelryRing= $_POST['jewelryRing'];
    $jewelryTilahari= $_POST['jewelryTilahari']; 

    $mobilenumber= $_POST['mobilenumber'];
    $target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image

  // $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    // $imageUpload= $_POST['fileToUpload'];
    $comment= $_POST['comment'];

    // $hashed_password = md5($password, PASSWORD_DEFAULT);      
      // echo "<script>alert('{$username}')</script>";
      //    echo "<script>alert('{$email}')</script>";
      //       echo "<script>alert('{$password}')</script>";
      //          echo "<script>alert('{$mobilenumber}')</script>";
    // echo "<script>alert\"INSERT INTO crudtable(username,email, password,jewelry,mobilenumber) VALUES ('$username','$email','$password','$jewelry','$mobilenumber\"")script>";
//WHERE username='$username' and password='$hashed_password'
$q1 = "SELECT * FROM `users` ";
$query1=mysqli_query($con,$q1);
$result = mysqli_fetch_array($query1);

/*if($result == 0){
    alert("User not found");
header("Location: signin.php");
}else{*/
                    // $query=mysqli_query($con,$q);
    /*'$_SESSION['email']'*/
    $q = "INSERT INTO crudtable(email,jewelry,mobilenumber,imageUpload,comment) VALUES ($email,$jewelry,$jewelryWedding,$jewelryNecklace,$jewelryRing,$jewelryTilahari','$mobilenumber','$filename','$comment')";
    $query=mysqli_query($con,$q);
    
    /*}*/
}
    
  
// session_destroy();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/17b6ff0f00.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Pretty-Footer.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <style type="text/css">
        .d-none{
            display: none;
        }
    </style>
    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
</head>

<body id="page-top" data-bs-spy="scroll" data-bs-target="#mainNav" data-bs-offset="57">
    <nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav">
        <div class="container"><a class="navbar-brand" href="#page-top" style="color: rgb(71,48,43);"><span style="text-decoration: underline;">R.p. Jewellers</span></a><button data-bs-toggle="collapse" data-bs-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about"><i class="fa-solid fa-circle-info"> About</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#services"><i class="fa-solid fa-taxi"> Services</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#jewelry"><i class="fa-solid fa-gem"> Jewellery</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#Contact"><i class="fa-solid fa-phone"> Contact</i></a></li>
                    <li class="nav-item"><a class="nav-link" href="#order"><i class="fa-solid fa-bell-concierge"> Order Now</i></a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href='signin.php'>Sign In</a></li> -->
                    <li class="nav-item"><a class="nav-link" href='logout.php' style="color: red;"><i class="fa-regular fa-circle-left"> Log Out</i></a></li>
                   <!-- <li> <?php echo $_SESSION[$email] ?> </li>  -->
                    </ul>
                <a href="https://www.facebook.com/profile.php?id=100069825111686" target="_blank"><i class="fa-brands fa-facebook" style="color: blue;"> Facebook</i></a>


            </div>
        </div>
         <b style="color: blue; font-size: larger;"><?php echo 'Welcome '.$_SESSION['email']; /*session_unset();*/   ?></b> 
    </nav>

    <header class="text-center text-white d-flex masthead" style="background: url(&quot;assets/img/header.jpg&quot;) center / cover repeat;">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    
                    <!-- <h1 class="text-uppercase">jewellery extracts beauty.</h1> -->
                    <hr>
                </div>
            </div>
            <div class="col-lg-8 mx-auto">
                <p class="text-faded mb-5">Customer's is like Butterfly. We create colors for your beauty.</p>
                <a class="btn btn-primary btn-xl" role="button" href="#services">Find Out More</a>
            </div>
        </div>
    </header>
    <section id="about" class="bg-primary" style="color: var(--bs-red);">
        <div class="container">
            <div class="row">
                <div class="col offset-lg-8 text-center mx-auto">
                    <h2 class="text-white section-heading">We've got what you need!</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">We provide different designed jewellery for your happiness.&nbsp;</p><a class="btn btn-light btn-xl" role="button" href="#services">Get Started!</a>
                </div>
            </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">&nbsp;Our Service</h2>
                    <hr class="my-4">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-diamond fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Diamond Design</h3>
                        <p class="text-muted mb-0">Diamond Design Jewellery available.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-paper-plane fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="200" data-aos-once="true"></i>
                        <h3 class="mb-3">Ready to Ship</h3>
                        <p class="text-muted mb-0">Quick shipping available.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-newspaper-o fa-4x text-primary mb-3 sr-icons" data-aos="zoom-in" data-aos-duration="200" data-aos-delay="400" data-aos-once="true"></i>
                        <h3 class="mb-3">Up to Date</h3>
                        <p class="text-muted mb-0">Service completed upto date.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 text-center">
                    <div class="mx-auto service-box mt-5"><i class="fa fa-heart fa-4x text-primary mb-3 sr-icons" data-aos="fade" data-aos-duration="200" data-aos-delay="600" data-aos-once="true"></i>
                        <h3 class="mb-3">Make Love</h3>
                        <p class="text-muted mb-0">Different design box for proposal available.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="jewelry" class="p-0">
        <div class="container-fluid p-0">
            <div class="row g-0 popup-gallery">
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Wedding Set-1</span></div>
                                 <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.3.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.3.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Tilhari-1</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.2.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.2.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Ear Ring-1</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.1.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.1.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Necklace-1</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Wedding Set-2</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.1.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.1.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Necklace-2</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                    <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.3.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.3.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Tilhari-2</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                    <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.3.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.3.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Tilhari-3</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                    <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.3.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.3.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Tilhari-4</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                    <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Wedding Set-3</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                    <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Wedding Set-4</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>
                    <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="assets/img/fullsize/0.jpg"><img class="img-fluid" src="assets/img/thumbnails/0.jpg">
                        <div class="portfolio-box-caption">
                            <div class="portfolio-box-caption-content">
                                <div class="project-category text-faded"><span>Category</span></div>
                                <div class="project-name"><span>Wedding Set-4</span></div>
                                <div class="project-name"><span>Weighting: 1.5 Tola</span></div>
                                  <div class="project-name"><span>Price: Rs. 1,50,000</span></div>
                            </div>
                        </div>
                    </a></div>    
            </div>
        </div>
    </section>
    <section class="text-white bg-dark">
        <div class="container text-center">
            <h2 class="mb-4">R.P. jewellers is a renowned jewelry shop of Nepal.</h2><a class="btn btn-light btn-xl sr-button" role="button" data-aos="zoom-in" data-aos-duration="400" data-aos-once="true" href="map.html">Visit Now</a>
        </div>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 text-center mx-auto">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="my-4">
                    <p class="mb-5">Ready to start !</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center ms-auto"><i class="fa fa-phone fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i>
                    <p>9843578549</p>
                </div>
                <div class="col-lg-4 text-center me-auto"><i class="fa fa-envelope-o fa-3x mb-3 sr-contact" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                    <p><a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCHTmDnpQvSFsDVTqMmwxnnTmmpBBQqmJQmPGkTNkKVzzFCgmSFVzqxhRPLSXqmctgzGlq">rpjewellers@gmail.com</a></p>
                </div>
            </div>
        </div>
        <div class="col-lg-6 m-auto">
    <form method="post" action="index.php" enctype="multipart/form-data">
        <div class="card">
            <div class="card-header" style="background-color:powderblue;">
                <h1 class="text-black"><a id="order"> Buy Jewelry</a></h1>

            </div>
            <br>
               <!--  <label>Username</label>  -->
                <input type="text" name="username" class="form-control" id="username" value=" " required><!-- <?php echo $_SESSION['email'];?> -->
                <br>

       
                <!-- <label>Password</label>
                <input type="Password" name="password" class="form-control" required><br>

                <label>Email</label>
                <input type="email" name="email" class="form-control" required><br> -->
            
            <label for="jewelry" >Jewelry</label>

            <select name="jewelry" id="jewelry" onchange="enableDetail(this)" >
              <option>Select Jewelry</option>  
              <option value="1">Wedding Set</option>
              <option value="2">Necklace</option>
              <option value="3">Ring</option>
              <option value="4">Tilahari</option>
            </select><br>

            <select name="jewelryWedding" id="jewelryWedding" class="d-none" >
                <option value="">Select WeddingSet</option>
              <option value="weddingSet1">Wedding Set 1</option>
              <option value="weddingSet2">Wedding Set 2</option>
              <option value="weddingSet3">Wedding Set 3</option>
              <option value="weddingSet4">Wedding Set 4</option>
            </select><br>

            <select name="jewelryNecklace" id="jewelryNecklace" class="d-none" >
                <option value="">Select Necklace</option>
              <option value="necklace1">Necklace 1</option>
              <option value="necklace2">Necklace 2</option>
              <option value="necklace3">Necklace 3</option>
              <option value="necklace4">Necklace 4</option>
            </select><br>

            <select name="jewelryRing" id="jewelryRing" class="d-none" >
                <option value="">Select Ring</option>
              <option value="ring1">Ring 1</option>
              <option value="ring2">Ring 2</option>
              <option value="ring3">Ring 3</option>
              <option value="ring4">Ring 4</option>
            </select><br>

            <select name="jewelryTilahari" id="jewelryTilahari" class="d-none" >
                <option value="">Select Tilahari</option>
              <option value="tilahari1">Tilahari 1</option>
              <option value="tilahari2">Tilahari 2</option>
              <option value="tilahari3">Tilahari 3</option>
              <option value="tilahari4">Tilahari 4</option>
            </select><br>
          
            <script type="text/javascript">
                function enableDetail(answer){
                    console.log(answer);
                    if(answer.value==1){
                        document.getElementById('jewelryWedding').classList.remove('d-none');
                    }else{
                        document.getElementById('jewelryWedding').classList.add('d-none');   
                    }
                    if(answer.value==2){
                        document.getElementById('jewelryNecklace').classList.remove('d-none');
                    }else{
                        document.getElementById('jewelryNecklace').classList.add('d-none');
                    }
                    if(answer.value==3){
                        document.getElementById('jewelryRing').classList.remove('d-none');
                    }else{
                        document.getElementById('jewelryRing').classList.add('d-none');
                    }
                    if(answer.value==4){
                        document.getElementById('jewelryTilahari').classList.remove('d-none');
                    }else{
                        document.getElementById('jewelryTilahari').classList.add('d-none');
                    }

                }
            </script>



            <label>Mobile Number</label>
            <input type="Number" name="mobilenumber" class="form-control"  required><br>
            <br>


            <div class="card">
            <div class="card-header" style="background-color:powderblue;'">
            <b style="textarea">Your Custom Design</b>
            </div></div><br>
            <label>Submit Design</label>
            <!-- imageUpload -->
            <input type="file" name="fileToUpload" id="fileToUpload" accept=".jpg, .jpeg, .png" ><br>

            <textarea name="comment" cols="40" rows="4" placeholder="Say something about design..." id="comment"></textarea><br>
            

            <button class="btn btn-success" type="submit" name="done" >Submit</button>
            
           
        </div>

        
    </form>
</div>
               
         </div>
        <footer>
            <div class="row">
                <div class="col-sm-6 col-md-4 footer-navigation">
                    <h3><a id="Contact" style="color: var(--bs-white);">R.P. Jewellers</a></h3>
                    <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                    <p class="company-name">R.P. Jewellers © 1920</p>
                </div>
                <div class="col-sm-6 col-md-4 footer-contacts">
                    <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                        <p><span class="new-line-span">Nagpokhari Street</span>Bhaktapur, Nepal</p>
                    </div>
                    <div><i class="fa fa-phone footer-contacts-icon"></i>
                        <p class="footer-center-info email text-start">9843578549</p>
                    </div>
                    <div><i class="fa fa-envelope footer-contacts-icon"></i>
                        <p> <a href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCKCHTmDnpQvSFsDVTqMmwxnnTmmpBBQqmJQmPGkTNkKVzzFCgmSFVzqxhRPLSXqmctgzGlq" target="_blank">rpjewellers@gmail.com</a></p>
                    </div>
                </div>
                <div class="col-md-4 footer-about">
                    <h4>About the company</h4>
                    <p> We are best jewelry sellers in the town. Do visit us in our shop for more details. </p>
                    <div class="social-links social-icons"><a href="https://www.facebook.com/profile.php?id=100069825111686" target="_blank"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
                </div>
            </div>
        </footer>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/creative.js"></script>
    <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
</body>
</html>


