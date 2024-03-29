<?php
            require_once "saveTOlogin.php";
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
      <title>Choose</title>
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
   </head>
   <style>
        .maypagkaorange{
            background-color: #ab3232;
        }
   </style>
   <body>
      <!--header section start -->
      <div class="header_section maypagkaorange">
         <div class="container-fluid">
            <div class="costum_header">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <div class="contact_menu">
                  <ul>
                     <li><img src="images/call-icon.png" class="padding_right_10"><a href="#">Call: +01 1234567890</a></li>
                     <li><img src="images/mail-icon.png" class="padding_right_10"><a href="#">Email: demo@gmail.com</a></li>
                     <li><img src="images/map-icon.png" class="padding_right_10"><a href="#">Location: lorm ipusm</a></li>
                  </ul>
               </div>
               <div class="menu_text">
               <div id="myNav" class="overlay kil">
                     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                     <div class="overlay-content wert">
                        <a href="home.php">Home</a>
                        
                        <a href="profile.php">Profile</a>
                        <a href="choose.php">Choose</a>
                       
                     </div>
                     </div>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
               </div>
            </div>
         </div>
      </div>
      <!-- header section end -->
      <!-- choose section start -->
      <style>
            .wer{
             font-style: italic;;
            }
      </style>
      <div class="choose_section layout_padding">
         <div class="container">
            <h1 class="services_taital wer" >Choose <span style="color: #0c426e">Now!</span></h1>
            <div class="choose_section_2 layout_padding">
               <div class="row">

                  <?php
                     $sql="SELECT`roomN`, `Descp`, `status`, `price`, `qty` FROM `products` order by qty ";
                     $res=$con->query($sql);
                     while($row = mysqli_fetch_object($res)){
                           
                 ?>

                  <div class="col-md-4">
                     <div class="choose_box">
                        <div class="number_1">
                           <img src="room/x.jpg" alt="">
                           
                        </div>
                        
                         
                           <p class="dummy_text">ROOM: <?php echo $row->roomN; ?></p>
                           <p class="dummy_text">ROOM DETAIL: <?php echo $row->Descp; ?></p>
                           <p class="dummy_text">ROOM STATUS: <?php echo $row->status; ?></p>
                           <p class="dummy_text">PRICE:$<?php echo $row->price;?></p>
                           <p class="dummy_text">Quantity: <?php echo $row->qty;?></p>                             
                        <div class="quote_bt_1"><a href="hotel.php">Book Now</a></div>
                     </div>
                  </div>
                        
                  <?php
                         
                     }
                     
                  ?>
               </div>
            </div>
         </div>
      </div>
      <!-- choose section end -->
      <!-- footer section start -->
      <div class="footer_section layout_padding margin_top_90">
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
            <p class="copyright_text">Copyright 2020 All Rights Reserved. Design by<a href="https://html.design"> Free  html Templates</a></p>
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
      </script>   
   </body>
   <style>
      .kil{
        background-color: rgb(0,0,0);
       background-color:rgb(69 89 89 / 95%);
      }
      .wert a{
            padding: 20px;
        }
   </style>
</html>