<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];

    // update user data
    $result = mysqli_query($mysqli, "UPDATE users SET name='$name',email='$email',mobile='$mobile' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $name = $user_data['name'];
    $email = $user_data['email'];
    $mobile = $user_data['mobile'];
}
?>
<html>
	<head>  
		<title>Edit User Data</title>
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
							<form name="update_user" method="post" action="update.php" width="80%">									
								<div class="form-group">
									<label for="name">Name</label>
									<input class="form-control" type="text" name="name" id="name" value=<?php echo $name;?>></td>
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input  class="form-control" type="text" name="email" id="email" value=<?php echo $email;?>>
											</div>
											<div class="form-group">
												<label for="mobile">Mobile</label>
												<input class="form-control" type="text" name="mobile" value=<?php echo $mobile;?>>
													</div>
													<input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
															<input class="col-lg-12 btn btn-primary" type="submit" name="update" value="Update">
															</form>
														</div>
													</body>
												</html>