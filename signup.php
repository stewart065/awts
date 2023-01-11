<?php

require_once "saveTOlogin.php";

        if($_GET)
        {
                $firstname = $_GET['first'];
                $lastname = $_GET['last'];
                $pn       = $_GET['pn'];
                $email     = $_GET['email'];
                $username = $_GET['user'];
                $password = $_GET['pass'];

                $sql = "insert into sign_ups(firstname,lastname,pn,email,username,password) values('$firstname','$lastname',' $pn','$email','$username','$password')";
                $res = $con->query($sql);
                if($res)
                        header("Location: home.php");
                else
                        echo "failed2";       
        } 
          
?>




<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
         background-color: #87d1b0;
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
                        <a href="services.php">Services</a>
                        <a href="pro.php">Providing</a>
                        <a href="choose.php">Choose</a>
                     </div>
                  </div>
                  <span class="toggle_icon" onclick="openNav()"><img src="images/toggle-icon.png" class="toggle_menu"></span>
               </div>
            </div>
         </div>
      </div>

      <!-- Section: Design Block -->
      <div class="container">
        <div class="row">
          <div class="col-2"></div>
          
          <div class="col-8">
              <section class="text-center">
                <!-- Background image -->
                <div class="p-10 bg-image" style="
                          top: 30px;
                      height: 10px;
                      ">
                   
                <!-- Background image -->

                <div class="card mx-2  shadow-20-strong" style="
                      margin-top: 50px;
                      background: hsla(0, 0%, 100%, 0.8);
                      backdrop-filter: blur(30px);
                      
                      ">
                  <div class="card-body py-5 ">

                    <div class="row d-flex justify-content-center">
                      <div class="col-lg-7">
                        <h2 class="fw-bold ">Register</h2>
                        <form action="register.php" >
                          <!-- 2 column grid layout with text inputs for the first and last names -->
                          <div class="row">
                            <div class="col-6">
                              <div class="form-outline">
                              <label class="form-label" for="form3Example1">First name</label>
                                <input type="text" id="form3Example1" name="first" class="form-control" required>
                                
                              </div>
                            </div>
                            <div class="col-md-6 ">
                              <div class="form-outline">
                              <label class="form-label" for="form3Example2">Last name</label>
                                <input type="text" id="form3Example2" name="last" class="form-control" required>
                               
                              </div>
                            </div>
                          </div>

                          <!-- Phone No input -->
                          <div class="form-outline ">
                          <label class="form-label" for="form3Example3">Phone #</label>
                            <input type="phone" id="form3Example3" name="pn" class="form-control" required>
                           
                          </div>
                          <!-- Email input -->
                          <div class="form-outline ">
                          <label class="form-label" for="form3Example3">Email address</label>
                            <input type="email" id="form3Example3" name="email" class="form-control" required>
                            
                          </div>
                          <!-- Email input -->
                          <div class="form-outline ">
                          <label class="form-label" for="form3Example3">Usernames</label>
                            <input type="text" id="form3Example3" name="user" class="form-control" required>
                            
                          </div>

                          <!-- Password input -->
                          <div class="form-outline ">
                          <label class="form-label" for="form3Example4">Password</label>
                            <input type="password" id="form3Example4" name="pass" class="form-control" required>
                           
                          </div>

                      

                          <!-- Submit button -->
                          <button type="submit" class="btn btn-primary btn-block mb-4">
                            Confirm
                          </button>

                          <!-- Register buttons -->
                          <!-- <div class="text-center">
                            <p>or sign up with:</p>
                            <button type="button" class="btn btn-link btn-floating mx-1">
                              <i class="fab fa-facebook-f"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                              <i class="fab fa-google"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                              <i class="fab fa-twitter"></i>
                            </button>

                            <button type="button" class="btn btn-link btn-floating mx-1">
                              <i class="fab fa-github"></i>
                            </button>
                          </div> -->
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

          </div>
        </div>
      </div>

  <style>
      body {
    --bs-body-font-family: var(--bs-font-monospace);
    --bs-body-line-height: 1.4;
    --bs-body-bg: var(--bs-gray-100);
  }

  .table {
    --bs-table-color: var(--bs-gray-600);
    --bs-table-bg: var(--bs-gray-100);
    --bs-table-border-color: transparent;
  }
  </style>


  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
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
</body>
</html>