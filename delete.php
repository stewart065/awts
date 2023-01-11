<?php
            require_once "saveTOlogin.php";

                $catid =$_GET['id'];
                $sql="DELETE FROM sign_ups where id ='$catid'";
                $res =$con->query($sql);
                if($res){
                
                    header("location:category.php");
                }

   
?>
