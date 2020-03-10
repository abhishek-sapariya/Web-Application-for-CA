<?php 

$error = array();
$PAN=$_SESSION['PAN']; 
$con = mysqli_connect('localhost', 'root', '', 'form-16');

	if(!$con)
		echo "Connection to server not established.";
	else{

		// receive all input values from the form
		$d80C = mysqli_real_escape_string($con, $_POST['80C']);
		$d80CCC = mysqli_real_escape_string($con, $_POST['80CCC']);
		$d80CCD_1 = mysqli_real_escape_string($con, $_POST['80CCD_1']);
		$total_80C=$d80C+$d80CCC+$d80CCD_1;
		$d80CCD_1B = mysqli_real_escape_string($con, $_POST['80CCD_1B']);
		$d80CCD_2 = mysqli_real_escape_string($con, $_POST['80CCD_2']);
		
		$maxlimit=mysqli_real_escape_string($con, $_POST['health_insurance']);
		$amount_80d=mysqli_real_escape_string($con, $_POST['80D']);
				

		$d80E=mysqli_real_escape_string($con, $_POST['80E']);
		$donation=mysqli_real_escape_string($con, $_POST['donation']);
		$d80G=mysqli_real_escape_string($con, $_POST['80G']);
		$d80TTA=mysqli_real_escape_string($con, $_POST['80TTA']);

		


		

//Into deductions
		$query="INSERT INTO `deductions`(`PAN`, `80C`, `80CCC`, `80CCD1`,`total_80C`, `80CCD1B`, `80CCD2`, `80E`, `80G`,`donation`,  `80TTA`,`year`) VALUES ('$PAN','$d80C','$d80CCC','$d80CCD_1','$total_80C','$d80CCD_1B','$d80CCD_2','$d80E','$d80G','$donation','$d80TTA','$year')";
		$run=mysqli_query($con,$query);
		if($run)
			echo "Deduction Data inserted"."<br>";
		else{
			echo "Data not inserted"."<br>";
			echo mysqli_error($con);
		}
		$query1="INSERT INTO `80d`(`PAN`, `max`, `amount`,`year`) VALUES ('$PAN','$maxlimit','$amount_80d','$year')";
		$run=mysqli_query($con,$query1);
		if($run)
			echo "Deduction Data inserted"."<br>";
		else{
			echo "Data not inserted"."<br>";
			echo mysqli_error($con);
		}
		

	}
?>