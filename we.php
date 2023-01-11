<?php
    require_once "saveTOlogin.php";

    if($_GET)
    {
            $parrival = $_GET['arrival'];
            $pdeparture = $_GET['departure'];
            $pfirst_name = $_GET['first_name'];
            $plast_name = $_GET['last_name'];
            $pemail = $_GET['email'];
            $p_phone = $_GET['phone'];
            $padults = $_GET['adults'];
            $pchildren = $_GET['children'];
            $proom_pref = $_GET['room_pref'];
            $pprice = $_GET['Prices'];
            $qty= $_GET['qyts'];
           
            $sql = "INSERT INTO `res`(`Arrival`, `Departure`, `FirstN`, `LastN`, `Email`, `Phone`, `Adults`, `Children`, `Roomid`, `price`, `qty`)  VALUES ('$parrival','$pdeparture','$pfirst_name','$plast_name','$pemail','$p_phone','$padults','$pchildren','$proom_pref','$pprice','$qty')";
            $res = $con->query($sql);
            if($res)
                    header("Location: payment.php");
            else
                    echo "failed2";       
    } 

    