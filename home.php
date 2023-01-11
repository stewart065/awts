<?php
       
       session_start();
       if(isset( $_SESSION['uname'])){

        header('location:home 2.php');
       }

         if($_SERVER['REQUEST_METHOD']=='POST'){
         include 'saveTOlogin.php'; 
          $username = $_POST['uname'];
          $password = $_POST['pass'];
  
           $sql=" SELECT * FROM `signups` where username='$username' && password='$password'";
  
            $res=mysqli_query($con,$sql);
                 if($res)
                 {
                  $num=mysqli_num_rows($res);
              
                       
      
                  if($num>0)
                  {
                         
                          
                        
                            $_SESSION['uname']=$username;
                           header('location: home 2.php');
                           
        
                  }
                  else{
                     echo '<script>alert("INVALID USERNAME & PASSWORD")</script>';
                  }
            }
         }
         
    
?>



<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
     
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>4k's Seaside Online Booking </title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesoeet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="css/login.css">
   </head>
   <style>
        .maypagkaorange{
            background-color: #ab3232;
        }
        .tyu{
         background-color: #ab3232;
        }
        .kil{
         background-color: rgb(0,0,0);
          background-color:rgb(69 89 89 / 95%);
        }
        .awts{
         background-color: #ab3232;
        }
        .wed{
         margin-left: 25px;
         text-align: center;
        }
        .wert a{
            padding: 20px;
            
        }
  
   </style>
   <body>
      <!--header section start -->
      <div class="header_section maypagkaorange">
         <div class="container-fluid ">
            <div class="costum_header">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="contact_menu">
                  <ul>
                     <li><img src="images/call-icon.png" class="padding_right_-6"><a href="#">Call: 0919 071 9081</a></li>
                     <li><img src="images/mail-icon.png" class="padding_right_10"><a href="#">Email:fourkseasideresto@gmail.com</a></li>
                     <li><img src="images/map-icon.png" class="padding_right_7"><a href="#">Location: San Vicente St., Bogo</a></li>
                     <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" class="hb">Login</button>
                  </ul>
               </div>
               <div class="menu_text">
                  <div id="myNav" class="overlay kil">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <div class="overlay-content wert">
                        <a href="home.php">Home</a>
                        <a href="sign-in-admin-form.php">DASHBOARD</a>
                        <a href="choose.php">Choose</a>
                     </div>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
               </div>
            </div>
         </div>
      </div>
      <style>
         .log{
            font-size: 30px;
         }
      </style>

                 <div id="id01" class="modal">
                  
                <form class="modal-content animate" action="" method="post">
                     <div class="imgcontainer">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <img src="images/boyaks.png" alt="Avatar" class="avatar">
                  
                        <div class="wew"><span class="log"><br> Login </span></div>
                     </div>
                     <style>
                        .awssdd{
                           color: black;
                        }
                        .qw{
                           color: black;
                        }
                        .wew{
                           color:black;
                        }
                        .hjk{
                           color: black;
                        }
                     </style>
                   
                     <div class="container">
                        <label for="uname" class="awssdd"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="uname">

                        <label for="psw" class="hjk"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="pass">
                        
                        <button class = "qw" type="submit" name="log">Login</button>
                        <label>
                        
                        <input type="checkbox" checked="checked" name="remember"> Remember me
                        </label> <br>
                        <a  href="signup.php">Signup</a>
                     </div>
                   
                              

               </form>
                           
                           
                </div>
                
      <!-- header section end -->
      <!-- banner section start -->
      <div class="banner_section layout_padding">
         <div class="container">
            <div id="main_slider" class="carousel slide" data-ride="carousel">
               <div class="carousel-inner">
                  <div class="carousel-item active">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital">
                              <h1 class="banner_taital">Come, stay and enjoy your day.</h1>
                              <p class="banner_text">4k's Seaside PentHouse offers you a privileged experience combining comfort and conviviality.</p>
                           </div>
                           <div class="btn_main">
                              <div class="quote_bt active"><a href="choose.php">Book Now</a></div>
                              <div class="contact_bt"><a href="#">Contact Us</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div><img src="images/banner-img.png" class="banner_img"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital">
                              <h1 class="banner_taital">Come, stay and enjoy your day.</h1>
                              <p class="banner_text">Whether you are a backpacker, a solo traveler or with your family, our hotel with top-of-the-range service will meet all your expectations.</p>
                           </div>
                           <div class="btn_main">
                              <div class="quote_bt active"><a href="choose.php">Book Now</a></div>
                              <div class="contact_bt"><a href="#">Contact Us</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div><img src="images/banner-img.png" class="banner_img"></div>
                        </div>
                     </div>
                  </div>
                  <div class="carousel-item">
                     <div class="row">
                        <div class="col-md-6">
                           <div class="banner_taital">
                              <h1 class="banner_taital">Come, stay and enjoy your day.</h1>
                              <p class="banner_text">More than just a hotel, 4k's Seaside PentHouse offers you a place to live and meet people.</p>
                           </div>
                           <div class="btn_main">
                              <div class="quote_bt active"><a href="choose.php">Book Now</a></div>
                              <div class="contact_bt"><a href="#">Contact Us</a></div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div><img src="images/banner-img.png" class="banner_img"></div>
                        </div>
                     </div>
                  </div>
               </div>
               <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
               <i class="fa fa-arrow-left" aria-hidden="true"></i>
               </a>
               <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
               <i class="fa fa-arrow-right" aria-hidden="true"></i>
               </a>
            </div>
         </div>
      </div>
      <!-- banner section end -->
      <!-- services section start -->
      <div class="services_section layout_padding tyu ">
         <div class="container ">
            <h1 class="services_taital">Our <span style="color: #0c426e">Services</span></h1>
            <p class="services_text" style="color: white; font-size: 20px">the 4k's Seaside hotel services offered by the five star rating Hotel make it an ideal choice for your stay in  </p>
            <div class="services_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-4 padding_right_0" >
                     <div class="services_box">
                        <h4 class="express_text" style="color: white;">Rooms<br> Experience the comfort</h4>
                        <div><img src="images/img-2.png" class="image_1"></div>
                        <p class="lorem_text" style="color: white; font-size: 20px">Safety and comfort are key factors in leisure stays these days. We assure you of medical-grade stringent sanitation procedures in preparing our rooms for guests so you can stay with us with peace of mind. </p>
                        <div class="seemore_bt" style="color: white;"><a href="#">See More</a></div>
                        
                     </div>
                  </div>
                  <div class="col-md-4 padding_0">
                     <div class="services_box">
                        
                     </div>
                  </div>
                  <div class="col-md-4 padding_left_0">
                     <div class="services_box">
                        <h4 class="express_text" style="color: white;">Banquets <br>Experience the emotions</h4>
                        <div><img src="images/img-3.png" class="image_1"></div>
                        <p class="lorem_text" style="color: white; font-size: 20px">Intimate gatherings are the norm, and we can still help you plan. We have options for any type of exclusive gathering and the requirements you need that here to the health protocols. Call us and we can plan with you. Your story begins here. </p>
                        <div class="seemore_bt"><a href="#">See More</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- services section end -->
      <!-- providing section start -->
      <div class="providing_section layout_padding">
         <div class="container">
            <h1 class="services_taital">We're Providing Best <span style="color: #0c426e">Quality Service</span></h1>
         </div>
      </div>
      <div class="providing_section_2 layout_padding ">
         <div class="container">
            <h2 class="clean_text">4k's Seaside Hotel </h2>
            <p class="ipsum_text"> 4k's Seaside  Hotel is a family-friendly hotel that offers a wide range of accommodation types, from rooms to suites. All this in the peaceful surroundings we will make your time at Bogo City San Vicente St. an unforgettable holiday. </p>
            <div class="quote_bt_1"><a href="choose.php">Book Now</a></div>
         </div>
      </div>
      <!-- providing section end -->
      <!-- choose section start -->
      <div class="choose_section layout_padding ">
         <div class="container">
            <h1 class="services_taital">Why <span style="color: #0c426e">Choose Us?</span></h1>
            <div class="choose_section_2 layout_padding">
               <div class="row">
                  <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <h4 class="number_text">01</h4>
                           <h4 class="trusted_text">Trusted Services</h4>
                        </div>
                        <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The  </p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <h4 class="number_text">02</h4>
                           <h4 class="trusted_text">Talented Workers</h4>
                        </div>
                        <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The  </p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <h4 class="number_text">03</h4>
                           <h4 class="trusted_text">Organic Products</h4>
                        </div>
                        <p class="dummy_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The  </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- choose section end -->
      <!-- testimonial section start -->
      <div class="testimonial_section layout_padding awts">
         <div class="container">
            <h1 class="testimonial_taital">Testimonial</h1>
            <div class="testimonial_section_2">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="testimonial_box">
                           <div class="tectimonial_mail">
                              <div class="client_image_section">
                                 <img src="images/client-img.png" class="client_img">
                              </div>
                              <div class="client_text_section">
                                 <p class="testimonial_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                                 <h4 class="joech_text">Joech</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="testimonial_box">
                           <div class="tectimonial_mail">
                              <div class="client_image_section">
                                 <img src="images/client-img.png" class="client_img">
                              </div>
                              <div class="client_text_section">
                                 <p class="testimonial_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                                 <h4 class="joech_text">Joech</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="testimonial_box">
                           <div class="tectimonial_mail">
                              <div class="client_image_section">
                                 <img src="images/client-img.png" class="client_img">
                              </div>
                              <div class="client_text_section">
                                 <p class="testimonial_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that</p>
                                 <h4 class="joech_text">Joech</h4>
                                 <p class="customer_text">Customer</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-arrow-right" aria-hidden="true"></i>
                  </a>
               </div>
            </div>
         </div>
      </div>
      <!-- testimonial section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Contact Us</h2>
                  <div class="location_text"><img src="images/map-icon1.png"><a href="#"><span class="padding_left_15">Location</span></a></div>
                  <div class="location_text"><img src="images/call-icon1.png"><a href="#"><span class="padding_left_15">(+71) 8522369417</span></a></div>
                  <div class="location_text"><img src="images/mail-icon1.png"><a href="#"><span class="padding_left_15">demo@gmail.com</span></a></div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Useful link </h2>
                  <div class="footer_menu">
                     <ul>
                        <li class="active"><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="service.html">Service</a></li>
                        <li><a href="blog.html">Blog</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h2 class="useful_text">Opening Time</h2>
                  <p class="footer_text">Mon : 07;00am   to  09:00 pm</p>
                  <p class="footer_text">Mon : 07;00am   to  09:00 pm</p>
                  <p class="footer_text">Mon : 07;00am   to  09:00 pm</p>
               </div>
               <div class="col-sm-6 col-lg-3">
                  <h1 class="useful_text">Newsletter</h1>
                  <input type="text" class="Enter_text" placeholder="Enter Your Email" name="Enter Your Email">
                  <div class="subscribe_bt"><a href="#">Subscribe</a></div>
               </div>
            </div>
            <div class="social_icon">
               <div id="social">
                  <a class="facebookBtn smGlobalBtn" href="#"></a>
                  <a class="twitterBtn smGlobalBtn" href="#"></a>
                  <a class="instagramBtn smGlobalBtn" href="#"></a>
                  <a class="linkedinBtn smGlobalBtn" href="#"></a>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">Copyright 2023 All Rights Reserved. By 4K's Seaside <a href=""></a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
            });
            
            $(".zoom").hover(function(){
            
            $(this).addClass('transition');
            }, function(){
            
            $(this).removeClass('transition');
            });
            });
            
      </script> 
      <script>
         function openNav() {
         document.getElementById("myNav").style.width = "100%";
         }
         
         function closeNav() {
         document.getElementById("myNav").style.width = "0%";
         }
         $('#myModal').on('shown.bs.modal', function () {
               $('#myInput').trigger('focus')
               })
      </script>   
      <script>
            // Get the modal
            var modal = document.getElementById('id01');

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
               if (event.target == modal) {
                  modal.style.display = "none";
               }
            }
      </script>

   </body>
</html>