<?php
              require_once "saveTOlogin.php";
              if($_GET){

                  $prod = $_GET['nameroom'];
                  $prodsc = $_GET['roomdesc'];
                  $prodst = $_GET['roomstatus'];
                  $prodpr = $_GET['roomprice'];
                  $qty=$_GET['roomqty'];

                  $sql = "INSERT INTO `products`(`roomN`,`Descp`,`status`,`price`,`qty`) VALUES ('$prod','$prodsc','$prodst','$prodpr','$qty')";
                  $res=$con->query($sql);   

                  header('location: tables.php');
                  
              }
             
              
        ?>
    

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
          .ws{
                
                margin-left: 630px;
                margin-top: 120px;
                
                
          }
          .ws input{
            padding: 10px;
            margin: 10px;
            border-radius: 5px;
            
          }
          .fr button{
              margin-left: 120px;
              top:20px;
              font-family: "Times New Roman", Times, serif;
             
          }
          .cv{
                
                left: 120px;
          }
          
          
      </style>
<body>
    <form action="">
                <div class="ws">
                  <input type="text" name="nameroom" placeholder="Enter Room Name" value=""required><br>
                  <input type="text" name="roomdesc" placeholder="Enter Description" value=""required><br>
                          
                            <select id="STATUS" style="margin-left: 10px;" name="roomstatus" required>
                              <option disabled selected value="">STATUS</option>
                              <option >ACTIVE</option>
                              <option >DEACTIVE</option>
                            </select>
                      <br>

                  <input type="text" style="margin-left: 10px;" name="roomprice" placeholder="Enter PRICE" value=""required><br>
                  <input type="text" style="margin-left: 10px;" name="roomqty" placeholder="Enter QUANTITY" value=""required><br>
                  <button class="btn btn-success" herf="tables.php">Confirm</button>
                </div> 
                
                  
            </form>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>