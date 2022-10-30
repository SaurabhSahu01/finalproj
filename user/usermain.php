<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Car Rental</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="../css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="../css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="../css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="../css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="./index.php"><img src="../images/logo.png" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="../index.php"> Home  </a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#about">Chauffers</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#testimonial">Vehicles</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Book Vehicle</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="#contact">Return</a>
                              </li>
                              <?php 
                                 if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] === TRUE){
                                    echo '<li class="nav-item">
                                    <a class="nav-link" href="../user/usermain.php">Our Services</a>
                                    </li>';
                                 }
                                 else{
                                    echo '<li class="nav-item">
                                    <a class="nav-link" href="../login.php">Our Services</a>
                                 </li>';
                                 }
                              ?>
                              
                              <?php 
                                 session_start();
                                 if(isset($_SESSION['loggedin']) and $_SESSION['loggedin'] === TRUE){
                                    echo '<li class="nav-item d_none">
                                    <a class="nav-link" href="../logout.php"><i class="fa fa-user-circle padd_right" aria-hidden="true"></i>Logout</a>
                                    </li>';
                                 }
                                 else{
                                    echo '<li class="nav-item d_none">
                                    <a class="nav-link" href="../login.php"><i class="fa fa-user-circle padd_right" aria-hidden="true"></i>Login/Register</a>
                                 </li>';
                                 }
                              ?>
                              
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container-fluid">
                     <div class="carousel-caption">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <h1>Welcome</h1>
                                 <span>car rental services</span>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure><img src="../images/CarRentalServices.jpeg" alt="#"/></figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end banner -->
      <!-- three_box -->
      <div class="three_box">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="box_text">
                     <h3>AUTO DIAGNOSE</h3>
                     <i><img src="images/thr.png" alt="#"/></i>
                     <p>ipsum dolor sit amet, consectetur adipiscing elit, sed d veniam, adipiscing elit, sed d veniam</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <h3>AUTO DIAGNOSE</h3>
                     <i><img src="images/thr1.png" alt="#"/></i>
                     <p>ipsum dolor sit amet, consectetur adipiscing elit, sed d veniam, adipiscing elit, sed d veniam</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="box_text">
                     <h3>AUTO DIAGNOSE</h3>
                     <i><img src="images/thr2.png" alt="#"/></i>
                     <p>ipsum dolor sit amet, consectetur adipiscing elit, sed d veniam, adipiscing elit, sed d veniam</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- three_box -->
      <!-- about -->
      <div  class="about" id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>About Our Car Service </h2>
                  </div>
               </div>
            </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="about_img">
                        <div class="about_box">
                           <h3>Dolor sit amet, consectetur adipiscing elit,  </h3>
                           <p>dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- wedo  section -->
      <div class="wedo ">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>What We Do</h2>
                     <p>It is a long established fact that a reader will be distracted by the </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="row">
                     <div class="col-md-6 margin_bottom">
                        <div class="work">
                           <figure><img src="./images/img1.png" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                           <h3>Quick repair<br><span class="blu">Total Service</span></h3>
                        </div>
                     </div>
                     <div class="col-md-6 margin_bottom">
                        <div class="work">
                           <figure><img src="./images/img2.png" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                           <h3>Quick repair<br><span class="blu">Total Service</span></h3>
                        </div>
                     </div>
                     <div class="col-md-6 margin_bottom">
                        <div class="work">
                           <figure><img src="./images/img3.png" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                           <h3>Quick repair<br> <span class="blu">Total Service</span></h3>
                        </div>
                     </div>
                     <div class="col-md-6 margin_bottom">
                        <div class="work">
                           <figure><img src="./images/img4.png" alt="#" /></figure>
                        </div>
                        <div class="work_text">
                           <h3>Quick repair<br><span class="blu">Total Service</span></h3>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end wedo  section -->
      <!-- testimonial -->
      <div class="testimonial" id="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Testimonial</h2>
                     <p>It is a long established fact that a reader will be distracted by the </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="./images/tes.jpg" alt="#"/></i>
                                          <h4>JCKOLO</h4>
                                          <span>(It is a long )</span>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="./images/tes1.jpg" alt="#"/></i>
                                          <h4>ROCOYO</h4>
                                          <span>(It is a long )</span>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="./images/tes.jpg" alt="#"/></i>
                                          <h4>JCKOLO</h4>
                                          <span>(It is a long )</span>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="./images/tes1.jpg" alt="#"/></i>
                                          <h4>ROCOYO</h4>
                                          <span>(It is a long )</span>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="./images/tes.jpg" alt="#"/></i>
                                          <h4>JCKOLO</h4>
                                          <span>(It is a long )</span>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                       </div>
                                    </div>
                                    <div class="col-md-6 margin_boot">
                                       <div class="test_box">
                                          <i><img src="./images/tes1.jpg" alt="#"/></i>
                                          <h4>ROCOYO</h4>
                                          <span>(It is a long )</span>
                                          <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <span class="carousel-control-next-icon" aria-hidden="true"></span>
                     <span class="sr-only">Next</span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
      </div>
      <!--  footer -->
      <footer id="contact">
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="titlepage">
                        <h2>Contact Us</h2>
                     </div>
                  </div>
                  <div class="col-md-6" style="margin-bottom: 10%;">
                     <form id="request" class="main_form" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="row">
                           <div class="col-md-12 ">
                              <input class="contactus" placeholder="Full Name" type="type" name="contactfullname"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Email" type="type" name="contactemail"> 
                           </div>
                           <div class="col-md-12">
                              <input class="contactus" placeholder="Phone Number" type="type" name="contactphone">                          
                           </div>
                           <div class="col-md-12">
                              <textarea class="textarea" placeholder="Message" type="type" name="contactmessage">Message </textarea>
                           </div>
                           <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <button class="send_btn" type="submit">Send</button>
                           </div>
                           <div class="col-sm-col-xl-6 col-lg-6 col-md-6 col-sm-12">
                              <ul class="social_icon">
                                 <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </form>
                     <?php 
                     // writing loigc for the contact us form
                     include "./connection/server.php"; //database connection
                     function input_data($data){  
                        $data = trim($data);  
                        $data = stripslashes($data);  
                        $data = htmlspecialchars($data);  
                        return $data;  
                     }
                     if(isset($_POST['contactfullname']) and isset($_POST['contactemail']) and isset($_POST['contactphone']) and isset($_POST['contactmessage'])){
                        $name = input_data($_POST['contactfullname']);
                        $email = input_data($_POST['contactemail']);
                        $phone =input_data($_POST['contactphone']);
                        $message = input_data($_POST['contactmessage']);
                        if(!empty($name) and !empty($email) and !empty($phone) and !empty($message)){
                           $sql = "INSERT INTO `contact` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message');";
                           if($conn->query($sql)){
                              unset($_POST['contactfullname']);
                              unset($_POST['contactemail']);
                              unset($_POST['contactphone']);
                              unset($_POST['contactmessage']);
                              header("refresh: 0");
                           }
                        }
                     }
                     ?>
                  </div>
               </div>
            </div>
            
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="./js/jquery.min.js"></script>
      <script src="./js/popper.min.js"></script>
      <script src="./js/bootstrap.bundle.min.js"></script>
      <script src="./js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="./js/custom.js"></script>
      <script>
         if ( window.history.replaceState ) {
         window.history.replaceState( null, null, window.location.href );
         }
      </script>
   </body>
</html>