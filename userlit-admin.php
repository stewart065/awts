<?php
        session_start();
        if(!isset($_SESSION['username'])){
          header("location: home.php");
        }
      require_once "saveTOlogin.php";
      if($_POST){

        $catN = $_POST['categoryname'];
        $catS = $_POST['categorystatus'];

        $sql="INSERT INTO `category`( `categoryN`, `categoryS`) VALUES ('$catN','$catS')";

        $res=$con->query($sql);

        if($res){
            
            echo '<script>alert("Successfuly Added!")</script>';
             
           
        }
      }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="images/img/apple-icon.png">
  <link rel="icon" type="image/png" href="images/img/favicon.png">
  
  <title>
    4K's Dashboard
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="css/nucleo-icons.css" rel="stylesheet" />
  <link href="css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-200">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
        <img src="images/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold text-white">Admin <bt> <?php echo $_SESSION['username']?></span>
      </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white " href="dashboard.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="tables.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white active bg-gradient-primary" href="userlits-admin.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">USERLIST</span>
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link text-white " href="Reservation-record.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Reservation Record</span>
          </a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link text-white " href="sign-up-admin-form.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Add UserAdmin</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="Logout.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Logout</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    </div>
  </aside>
  
  <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">User List</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">USER LIST</h6>
        </nav>
    </nav>  
      <table class="table table-dark">
          <thead>
              <tr>
              
                <th scope="col">
                    EMAIL
                </th>
                <th scope="col">
                    FIRST NAME
                </th >
                <th scope="col">
                   LAST NAME
                </th >
                <th scope="col">
                   PHONE NO.
                </th >
                <th scope="col">
                    USERNAME
                </th >
                <th scope="col">
                    PASSWORD
                </th >
              </tr>
            </thead>

                  <?php
                       
                        $sql="SELECT * FROM `signups`";
                        $res=$con->query($sql);
                        while($row=mysqli_fetch_object($res)){
                          echo"<tr>";
                          
                          echo"<td >$row->email</td>";
                          echo"<td>$row->firstname</td>";
                          echo"<td>$row->lastname</td>";
                          echo"<td>$row->pn</td>";
                          echo"<td>$row->username</td>";
                          echo"<td>$row->password</td>";
                          echo " <td><a style='background-color: blue; color: white;' href='update.php?id=$row->id'>Update</a> <a style='background-color: red;' href='delete.php?id=$row->id'>Delete</a></td>";
                          
                          echo"</tr>";
                        }
                    ?>
                    
      </table>


        
            
  <!--   Core JS Files   -->
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/plugins/perfect-scrollbar.min.js"></script>
  <script src="js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/material-dashboard.min.js?v=3.0.0"></script>
</body>

</html>