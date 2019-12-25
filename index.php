<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");
?>

<html>
	<head>    
		<title>Homepage</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
			<meta content="" name="keywords">
				<meta content="" name="description">
					<link href="css/bootstrap.min.css" rel="stylesheet">		
						<style>	
			body {
				margin-top: 10px;
			}

			.table-content {
				margin-right: 10%;
				margin-left: 10%;			
			}
						</style>
					</head>

					<body>
						<div class="col-lg-12">		
							<a href="create.php" class="btn btn-primary float-right tools">Add New User</a>
						</div>
						<br/>
						<br/>
						<div class="col-lg-12">	
							<table width='80%' border=1 align="center" class="table">

								<thead class="thead-dark">
									<tr>
										<th>Name</th>
										<th>Mobile</th>
										<th>Email</th>
										<th>Update</th>
									</tr>
								</thead>								
								<?php  
									while($user_data = mysqli_fetch_array($result)) {                 
										echo "<tr>";
										echo "<td>".$user_data['name']."</td>";
										echo "<td>".$user_data['mobile']."</td>";
										echo "<td>".$user_data['email']."</td>";    
										echo "<td>
										<a href='update.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";		
									}
								?>
							</table>
						</div>
						<script src="js/main.js"/>
					</body>
				</html>