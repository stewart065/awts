<?php
            require_once "saveTOlogin.php";
            $prodid=$_GET['id'];
            $sql="DELETE FROM `product` WHERE id = '$prodid'";
            $res=$con->query($sql);
            if($res){
               header("location: tables.php");
            }

