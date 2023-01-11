<?php

      require_once "saveTOlogin.php";

      if($_POST){

            $name = $_POST['names'];
            $user = $_POST['user'];
            $pass = $_POST['pass'];
            
            $sql ="INSERT INTO `admin`(`name`, `username`, `password`) VALUES ('$name','$user','$pass')";
            $res =$con->query($sql);

            if($res)

               header ("location: home.php");
              else
                echo "FAILED TO REGISTER!";
              
      }