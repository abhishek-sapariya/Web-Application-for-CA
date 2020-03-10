<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration of employee</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>

		
		<div class="input-group">
			<label>FirstName</label>
			<input type="text" name="firstname" id="firstname"  required>
		</div>
		<div class="input-group">
			<label>MiddleName</label>
			<input type="text" name="middlename" id="middlename" required>
		</div>
		<div class="input-group">
			<label>LastName</label>
			<input type="text" name="lastname" id="lastname"  required>
		</div>
		
		<div class="input-group">
			<label>Date Of Birth</label>
			<input type="date" name="dob" id="dob" required>
		</div>
		<div class="input-group">
			<label>Age</label>
			<select name="age" id="age" required>
				<option value="0-60">below and 60</option>
				<option value="60-80">61 to 80</option>
				<option value="80-more">morethan 80</option>
			</select>
		</div>
		<div class="input-group">
			<label>Mobile</label>
			<input type="text" name="mobile" id="mobile" required>
		</div>
		
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" id="email"  required>
		</div>
		<div class="input-group">
			<label>Address</label>
			Flat No.<br><input type="text" name="flatno"  id="flatno" >
			Name of Premises/Building/Village<input type="text" name="building" id="building">
			Road/Street/Post Office<input type="text" name="street" id="street">
			Area/Locality<input type="text" name="area" id="area">
			Town/City/District<input type="text" name="city" id="city">
			
			PinCode<input type="text" name="pincode" id="pincode">
			
			</div>
		<div class="input-group" >
			<label>PAN No</label>
			<input type="text" name="PAN" id="PAN" required>
		</div>
		<div class="input-group">
			<label>Aadhaar No.</label>
			<input type="radio" name="aadhaarcheck" id="aadhaarcard" value="aadhaarcard">
			<center>OR</center>
			<label>Aadhaar Enrolment Id</label>
			<input type="radio" name="aadhaarcheck" id="aadhaarenroll" value="aadhaarenroll">
			<input type="text" name="aadhaar" id="aadhaar" required>



		</div> 
<p style="font-size: 15px;">[Note: If Aadhaar Number is not yet allotted, then Aadhaar Enrolment Id is required. All the digits in enrolment ID & Date and time of enrolment to be entered continuously. For example Enrolment ID: 1234/12345/12345 & Date/Time of enrolment: 01/12/2016 11:50:22 to be entered as 1234123451234501122016115022]"</p>																															

		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			admin login <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>