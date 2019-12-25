<html>
	<head>
		<title>Add Users</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
			<meta content="" name="keywords">
				<meta content="" name="description">
					<link href="css/bootstrap.min.css" rel="stylesheet">
						<style>
						body {
							margin-top: 10px;
						}
						form {
							margin-top: 5%;
							margin-bottom: 5%;
						}

						.float-center {
							margin-right: auto;
							margin-left: auto;
						}

						margin10px {
							margin-right: 10px;
							margin-left: 10%;
						}
						</style>
					</head>

					<body>
						<div class="col-lg-11">
							<a href="index.php" class="btn btn-info float-right">Go to Home</a>
							<br/>
						</div>
						<div class="col-lg-10 float-center">
							<form action="create.php" method="post" name="form1" width="80%">
								<div class="form-group">
									<label for="name">Name</label>
									<input class="form-control" type="text" name="name" id="name">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input class="form-control" type="text" name="email" id="email">
										</div>
										<div class="form-group">
											<label for="mobile">Mobile</label>
											<input class="form-control" type="number" name="mobile" id="mobile">
											</div>
											<td>
												<input class="col-lg-12 btn btn-primary" type="submit" name="Submit" value="Add">
												</td>
											</tr>
										</table>
									</form>
								</div>
								<?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO users(name,email,mobile) VALUES('$name','$email','$mobile')");

        // Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
    }
    ?>
							</body>
						</html>