
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="images/img/apple-icon.png">
  <link rel="icon" type="image/png" href="images/img/favicon.png">
  <title>
    4K's Seaside Booking System
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
        <span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
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
          <a class="nav-link text-white active bg-gradient-primary" href="../pages/tables.html">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">table_view</i>
            </div>
            <span class="nav-link-text ms-1">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="userlit-admin.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">USERLIT</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white " href="Reservation-record.php">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">view_in_ar</i>
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
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">PRODUCTS</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">PRODUCTS</h6>
        </nav>
            
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group input-group-outline">
              <label class="form-label">Type here...</label>
              <input type="text" class="form-control">
            </div>
          </div>
          
           
        </div>
      </div>
    </nav>
      
      
    <!-- End Navbar -->
    <style>
     
    </style>
    <div class="container-fluid py-4">
      <div class="row uy">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <a href="add.php"class="btn btn-success ml-150" style="margin-left: 40px;">+ADD ROOM</a>
                
                
                
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ROOMS</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">DESCRIPTION</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PRICE</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">QUANTITY</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTIONS</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  <tbody>
                  
                          <?php
                                  require_once  "saveTOlogin.php";
                                  $sql="SELECT * FROM `products`";
                                  $res=$con->query($sql);
                                  while($row = mysqli_fetch_object($res)){
                                    echo"<tr>";
                                        
                                                  
                                          echo"<td><div class='d-flex px-2'><div class='my-auto'> <h6 class='mb-0 text-sm'>$row->roomN</h6></div></div></td>";
                                                  echo"<td><div class='d-flex px-2'><div class='my-auto'><h6 class='mb-0 text-xm' style='margin-left:6px;'>$row->Descp</h6></div></div></td>";
                                                  echo"<td><div style='margi' class='d-flex px-2'><div class='my-auto'> <h6 style='margin-left:90px;' class='text-xs font-weight-bold'>$row->status</h6></div></div></td>";
                                                  echo"<td><div style='margi' class='d-flex px-2'><div class='my-auto'> <h6 style='margin-left:40px;' class='text-xm font-weight-bold'>$row->price</h6></div></div></td>";
                                                  echo"<td><div style='margi' class='d-flex px-2'><div class='my-auto'> <h6 style='margin-left:50px;' class='text-xm font-weight-bold'>$row->qty</h6></div></div></td>";
                                                  echo"<td><a class='btn btn-primary' style='left:50px;' href='update.php?id=$row->id'>Update</a> <a class='btn btn-danger' style='left:50px;' href='deletepr.php?id=$row->id'>Delete</a></td>";
                                           
                                    echo"</tr>";
                                  }
                            ?>
                          
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      
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