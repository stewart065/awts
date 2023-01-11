<?php
    require_once "saveTOlogin.php";
    
    session_start();

      if(!isset($_SESSION['uname'])){
        header ('location: choose.php');
        
      }

      
      
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Hotel Reservation Form</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>
    
		<form class="hotel-reservation-form" style="width: 50%; height: 20%;" action="we.php">
			<h1><i class="far fa-calendar-alt"></i>Hotel Reservation Form</h1>
			<div class="fields">
				<!-- Input Elements -->
                <div class="wrapper">
                        <div>
                            <label for="arrival">Arrival</label>
                            <div class="field">
                                <input id="arrival" type="date" name="arrival" required>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div>
                            <label for="departure">Departure</label>
                            <div class="field">
                                <input id="departure" type="date" name="departure" required>
                            </div>
                        </div>
                    </div>

                    <div class="wrapper">
                        <div>
                            <label for="first_name">First Name</label>
                            <div class="field">
                                <i class="fas fa-user"></i>
                                <input id="first_name" type="text" name="first_name" placeholder="First Name" required>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div>
                            <label for="last_name">Last Name</label>
                            <div class="field">
                                <i class="fas fa-user"></i>
                                <input id="last_name" type="text" name="last_name" placeholder="Last Name" required>
                            </div>
                        </div>
                    </div>
                        <label for="email">Email</label>
                            <div class="field">
                                <i class="fas fa-envelope"></i>
                                <input id="email" type="email" name="email" placeholder="Your Email" required>
                            </div>

                            <label for="phone">Phone</label>
                                <div class="field">
                                    <i class="fas fa-phone"></i>
                                    <input id="phone" type="tel" name="phone" placeholder="Your Phone Number" required>
                                </div>

                                <div class="wrapper">
                                    <div>
                                        <label for="adults">Adults</label>
                                        <div class="field">
                                            <select id="adults" name="adults" required>
                                                <option disabled selected value="">--</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="gap"></div>
                                    <div>
                                        <label for="children">Children</label>
                                        <div class="field">
                                            <select id="children" name="children" required>
                                                <option disabled selected value="">--</option>
                                                <option value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <label for="room_pref">Room Preference</label>
                                    <div class="field">
                                        <select id="room_pref" name="room_pref" required>
                                             <option disabled selected value="">--</option>
                                            <?php
                                                $sql = "SELECT * from products ";
                                                $res = $con->query($sql);

                                                while ($row =mysqli_fetch_object($res)){
                                                echo "<option data-price=\"$row->price\">$row->roomN</option>"; 
                                                }
                                            ?>
                                        </select>
                                        
                                    </div>
                                    
                                    <label for="room_pref">Price : <input type="text" name="Prices" id="priceInput" ></br></label> 
                                    <label for="room_pref">Quantity : <input type="text" name="qyts" ></br></label>
                                    
                                    <input type="submit" value="Reserve"> 
                                   
			</div>
		</form>
    
	</body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(function () {
        $('#room_pref').change(function () {
            $('#priceInput').val($('#room_pref option:selected').attr('data-price'));
        });
    });
    </script>
</html>