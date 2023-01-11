<?php   

            require_once "saveTOlogin.php";

                  
					
					 $fname = $_POST['Fname'];
					 $lname = $_POST['lasN'];
					 $phone = $_POST['phon'];
					 $email = $_POST['emails'];
					 $street = $_POST['stret'];
					 $city = $_POST['cty'];
					 $state = $_POST['states'];
					 $ZipC = $_POST['zipc'];
					 
						 $sql="UPDATE `personaldetails` SET`firstName`='$fname',`LastName`='$lname',`Phone`='$phone',`Email`='$email',`Street`='$street',`City`='$city',`State`='$state',`ZipCode`='$ZipC' WHERE 1";
						 $res=$con->query($sql);
		 
					 if($res)
                         header("location: profile.php");
					

	