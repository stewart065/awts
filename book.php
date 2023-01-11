<?php
            require_once "saveTOlogin.php";
			?>				
			
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,minimum-scale=1">
		<title>Hotel Reservation</title>
	</head>
	<body style="background-color:#F5F6F8;font-family:-apple-system, BlinkMacSystemFont, 'segoe ui', roboto, oxygen, ubuntu, cantarell, 'fira sans', 'droid sans', 'helvetica neue', Arial, sans-serif;box-sizing:border-box;font-size:16px;">
		<div style="background-color:#fff;margin:30px;box-sizing:border-box;font-size:16px;">
			<h1 style="padding:40px;box-sizing:border-box;font-size:24px;color:#ffffff;background-color:#cb5f51;margin:0;">4k's Pension House & Spa Reservation</h1>
			<p style="padding:40px 40px 20px 40px;margin:0;box-sizing:border-box;font-size:16px;">A guest has booked a reservation for <b>
				<?php
						$sql = "SELECT Arrival FROM `res2` order by id desc limit 1";
						$result = $con->query($sql);
						
						while($row = mysqli_fetch_object($result)){
						echo "$row->Arrival";
							
						}
				?>
			</b> and will departure on <b>
				<?php
						$sql = "SELECT Departure FROM `res2` order by id desc limit 1";
						$result = $con->query($sql);
						
						while($row = mysqli_fetch_object($result)){
						echo "$row->Departure";
						}
				?>
			</b>.</p>
			<h2 style="padding:20px 40px;margin:0;color:#394453;box-sizing:border-box;">Reservation Details</h2>
			<div style="box-sizing:border-box;padding:0 40px 20px;">
				<table style="border-collapse:collapse;width:100%;">
					<tbody>

						
								<tr>
									<td style="padding:15px 0;text-decoration:underline;">Email</td>
									<?php
											$sql = "SELECT Email FROM `res2` order by id desc limit 1";
											$result = $con->query($sql);
											
											while($row = mysqli_fetch_object($result)){
											echo "<td style='text-align:right;'>$row->Email</td>";
												
											}
									?>
								</tr>
								<tr>
									<td style="padding:15px 0;text-decoration:underline;">Name</td>
									<td style="text-align:right;"><?php 
													$sql = "SELECT FirstN,LastN FROM `res2` order by id desc limit 1";
													$result = $con->query($sql);
													
													while($row = mysqli_fetch_object($result)){
													echo "$row->FirstN";
													echo "$row->LastN";
														
													}
										?></td>
								</tr>
								<tr>
									<td style="padding:15px 0;text-decoration:underline;">Phone</td>
									<td style="text-align:right;">
											<?php
													$sql = "SELECT Phone FROM `res2` order by id desc limit 1";
													$result = $con->query($sql);
													
													while($row = mysqli_fetch_object($result)){
													echo "$row->Phone";
														
													}
											?>
										
										</td>
								</tr>
								<tr>
									<td style="padding:15px 0;text-decoration:underline;">Adults</td>
									<td style="text-align:right;">
											<?php
															$sql = "SELECT Adults FROM `res2` order by id desc limit 1";
															$result = $con->query($sql);
															
															while($row = mysqli_fetch_object($result)){
															echo "$row->Adults";
																
															}
		
													
										?></td>
								</tr>
								<tr>
									<td style="padding:15px 0;text-decoration:underline;">Children</td>
									<td style="text-align:right;"><?php
															$sql = "SELECT Children FROM `res2` order by id desc limit 1";
															$result = $con->query($sql);
															
															while($row = mysqli_fetch_object($result)){
															echo "$row->Children";
																
															}
										?></td>
								</tr>
								<tr>
									<td style="padding:15px 0;text-decoration:underline;">Room Preference</td>
									<td style="text-align:right;"><?php
												$sql = "SELECT RoomP FROM `res2` order by Arrival asc limit 1";
												$result = $con->query($sql);
												
												while($row = mysqli_fetch_object($result)){
												echo "$row->RoomP";
													
												}			
										?></td>
								</tr>
						

					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>