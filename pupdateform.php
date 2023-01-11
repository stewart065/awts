<?php
            require_once "saveTOlogin.php";
               

                	
			
					 $sql="SELECT`firstName`, `LastName`, `Phone`, `Email`, `Street`, `City`, `State`, `ZipCode` FROM `personaldetails` WHERE 1";
					 $res = $con->query($sql);
					 $row = $res->fetch_assoc();
					 ?>
	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <title>dark profile settings - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


		<div class="container">
			<div class="row gutters">
				<form action="pupdate.php" method= "POST">
				<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
					<div class="card h-100">
						<div class="card-body">
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">Personal Details</h6>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="fullName">firstName</label>
										<input type="text" class="form-control" id="fullName" name="Fname" placeholder="Enter full name" value="<?php echo $row['firstName']?>">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="lastN">Last Name</label>
										<input type="lastN" class="form-control" id="LastN" name="lasN" placeholder="Enter Last name" value="<?php echo $row['LastName']?>">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="phone">Phone</label>
										<input type="text" class="form-control" id="phone" name="phon" placeholder="Enter phone number" value="<?php echo $row['Phone']?>">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="Email" class="form-control" id="email" name="emails" placeholder="Enter Email" value="<?php echo $row['Email']?>">
									</div>
								</div>
							</div>
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<h6 class="mb-3 text-primary">Address</h6>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="Street">Street</label>
										<input type="name" class="form-control" id="Street" name="stret" placeholder="Enter Street" value="<?php echo $row['Street']?>">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="ciTy">City</label>
										<input type="name" class="form-control" id="ciTy" name="cty" placeholder="Enter City" value="<?php echo $row['City']?>">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="sTate">State</label>
										<input type="text" class="form-control" id="sTate" name="states" placeholder="Enter State" value="<?php echo $row['State']?>">
									</div>
								</div>
								<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
									<div class="form-group">
										<label for="zIp">Zip Code</label>
										<input type="text" class="form-control" id="zIp" name="zipc" placeholder="Zip Code"value="<?php echo $row['ZipCode']?>">
									</div>
								</div>
							</div>
							<div class="row gutters">
								<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
									<div class="text-right">
										<a type="button" id="submit" href="home 2.php"name="submit" class="btn btn-secondary">Cancel</a>
									
										<button type="submit" class="btn btn-success">SAVE</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> 
			</div>
		</div>
	
	</form>

<style type="text/css">
            body{margin-top:20px;
            color: #bcd0f7;
                background: #1A233A;
            }
            .account-settings .user-profile {
                margin: 0 0 1rem 0;
                padding-bottom: 1rem;
                text-align: center;
            }
            .account-settings .user-profile .user-avatar {
                margin: 0 0 1rem 0;
            }
            .account-settings .user-profile .user-avatar img {
                width: 90px;
                height: 90px;
                -webkit-border-radius: 100px;
                -moz-border-radius: 100px;
                border-radius: 100px;
            }
            .account-settings .user-profile h5.user-name {
                margin: 0 0 0.5rem 0;
            }
            .account-settings .user-profile h6.user-email {
                margin: 0;
                font-size: 0.8rem;
                font-weight: 400;
            }
            .account-settings .about {
                margin: 1rem 0 0 0;
                font-size: 0.8rem;
                text-align: center;
            }
            .card {
                background: #272E48;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 0;
                margin-bottom: 1rem;
            }
            .form-control {
                border: 1px solid #596280;
                -webkit-border-radius: 2px;
                -moz-border-radius: 2px;
                border-radius: 2px;
                font-size: .825rem;
                background: #1A233A;
                color: #bcd0f7;
            }

</style>
</body>
<script type="text/javascript"> </script>
</html>