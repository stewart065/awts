<?php   

            require_once "saveTOlogin.php";

                  
					
                        $subtotal = $_GET['substotal'];
                        $amountsw = $_GET['totals'];
                        $total = $_GET['totalsale'];
  
						 $sql="UPDATE `res` SET `subtotal`='$subtotal',`amount`='$amountsw',`total`='$total' WHERE 1";
						 $res=$con->query($sql);
		 
					 if($res)
                         header("location: profile.php");
                     
                    else
                        echo"failed to input";
					

	