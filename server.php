<?php 
	session_start();

	// variable declaration
	$fname = "";
	$lname = "";
	$email    = "";

	$error = array(); 
	$_SESSION['success'] = "";

	// connect to database
$con = mysqli_connect('localhost', 'root', '', 'form-16');
	if(!$con)
		 array_push($error, "Connection to server not established.");
	else{
	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($con, $_POST['firstname']);
		$mname = mysqli_real_escape_string($con, $_POST['middlename']);
		$lname = mysqli_real_escape_string($con, $_POST['lastname']);
		$dob = mysqli_real_escape_string($con, $_POST['dob']);
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$PAN = mysqli_real_escape_string($con, $_POST['PAN']);
		$mobile = mysqli_real_escape_string($con, $_POST['mobile']);
		
		$flatno = mysqli_real_escape_string($con, $_POST['flatno']);
		$building = mysqli_real_escape_string($con, $_POST['building']);
		$street = mysqli_real_escape_string($con, $_POST['street']);
		$area = mysqli_real_escape_string($con, $_POST['area']);
		$city = mysqli_real_escape_string($con, $_POST['city']);
		$pincode = mysqli_real_escape_string($con, $_POST['pincode']);
		$aadhaarcheck = mysqli_real_escape_string($con, $_POST['aadhaarcheck']);
		$aadhaar = mysqli_real_escape_string($con, $_POST['aadhaar']);
		// form validation: ensure that the form is correctly filled
		
		
		// register user if there are no errors in the form
		if (count($error) == 0) {
			
			if($aadhaarcheck=='aadhaarcard'){
				$query = "INSERT INTO `client` (`firstname`, `middlename`, `lastname`, `dob`, `PAN`, `aadhaar`, `enrollmentno`, `email`, `mobileno`)
					  VALUES('$fname','$mname','$lname','$dob','$PAN','$aadhaar','','$email','$mobile')";
					  	$q1=mysqli_query($con, $query);
					 if(!$q1)
					{
						echo "User with PAN number you have entered is already exist!!!";
					}
					else
						echo "Registered successfully";
			}
			
			if($aadhaarcheck=='aadhaarenroll'){
								
			$query = "INSERT INTO `client` (`firstname`, `middlename`, `lastname`, `dob`, `PAN`, `aadhaar`, `enrollmentno`, `email`, `mobileno`)
					  VALUES('$fname','$mname','$lname','$dob','$PAN','','$aadhaar','$email','$mobile')";
					  	$q1=mysqli_query($con, $query);
					  	if(!$q1)
						{
							echo "User with PAN number you have entered is already exist!!!";
						}
			}
			
			$query1="INSERT INTO `address`(`PAN`, `flatno`, `building`, `street`, `Area`, `City`, `pincode`) VALUES ('$PAN','$flatno','$building','$street','$area','$city','$pincode')";
			
			mysqli_query($con, $query1);
	
		}

	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($con, $_POST['username']);
		$password = mysqli_real_escape_string($con, $_POST['password']);

		if (empty($username)) {
			array_push($error, "username is required");
		}
		if (empty($password)) {
			array_push($error, "Password is required");
		}

		if (count($error) == 0) {
			
			$query = "SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
			$results = mysqli_query($con, $query);
			$row=mysqli_fetch_array($results);
			if(!$results)
			{
				echo mysqli_error($con);
			}
			
			
			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['success'] = "You are now logged in";
				header('location: admin.php');
			}else {
				
				array_push($error, "Wrong username/password combination");
			}
		}
	}
}
?>