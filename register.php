<?php

        require_once "saveTOlogin.php";

        $firstname = $_GET['first'];
        $lastname = $_GET['last'];
        $pn       = $_GET['pn'];
        $email     = $_GET['email'];
        $username = $_GET['user'];
        $password = $_GET['pass'];

        $sql = "INSERT INTO `signups`( `firstname`, `lastname`, `pn`, `email`, `username`, `password`) VALUES ('$firstname','$lastname',' $pn','$email','$username','$password')";
        $res = $con->query($sql);
        if($res)
                header("Location: insert.php");
         else
                echo "failed";       
           