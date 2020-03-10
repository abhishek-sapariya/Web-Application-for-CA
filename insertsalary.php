<?php 
session_start();
if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
$year=$_SESSION['year'];
$error = array();
$PAN=$_SESSION['PAN']; 
$con = mysqli_connect('localhost', 'root', '', 'form-16');
	if(!$con)
		echo "Connection to server not established.";
	else{
	if (isset($_POST['salary_fill'])) {
		// receive all input values from the form
		$section_17_1 = mysqli_real_escape_string($con, $_POST['section_17_1']);
		$section_17_2 = mysqli_real_escape_string($con, $_POST['section_17_2']);
		$section_17_3 = mysqli_real_escape_string($con, $_POST['section_17_3']);
		$total_sal=$section_17_1+$section_17_2+$section_17_3;
		$sal_other= mysqli_real_escape_string($con, $_POST['oth_emp']);
		$deduction_1 = mysqli_real_escape_string($con, $_POST['deduction_1']);
		$deduction_2 = mysqli_real_escape_string($con, $_POST['deduction_2']);
		$deduction_3 = mysqli_real_escape_string($con, $_POST['deduction_3']);
		$total_ded=$deduction_1+$deduction_2+$deduction_3;
		$income_house = mysqli_real_escape_string($con, $_POST['income_house']);
		$income_other = mysqli_real_escape_string($con, $_POST['income_other']);
		$relief = mysqli_real_escape_string($con, $_POST['relief']);
		
	/*	$type = mysqli_real_escape_string($con, $_POST['type_hp']);
		$gross_rent = mysqli_real_escape_string($con, $_POST['gross_rent']);
		$tax_paid = mysqli_real_escape_string($con, $_POST['tax_local']);
		$borrowed = mysqli_real_escape_string($con, $_POST['borrowed']);
		$rent_less = mysqli_real_escape_string($con, $_POST['rent_less']);


		$income_1=mysqli_real_escape_string($con, $_POST['income_1']);
			$amount_1=mysqli_real_escape_string($con, $_POST['amount_1']);

		$income_2=mysqli_real_escape_string($con, $_POST['income_2']);
			$amount_2=mysqli_real_escape_string($con, $_POST['amount_2']);*/

		$allowance_1=mysqli_real_escape_string($con, $_POST['nature_10_5']);
			$all_amount_1=mysqli_real_escape_string($con, $_POST['travel_concession']);

		$allowance_2=mysqli_real_escape_string($con, $_POST['nature_10_10']);
			$all_amount_2=mysqli_real_escape_string($con, $_POST['death_cum_retirement']);

		$allowance_3=mysqli_real_escape_string($con, $_POST['nature_10_10A']);
			$all_amount_3=mysqli_real_escape_string($con, $_POST['pension']);

		$allowance_4=mysqli_real_escape_string($con, $_POST['nature_10_10AA']);
			$all_amount_4=mysqli_real_escape_string($con, $_POST['cash']);

		$allowance_5=mysqli_real_escape_string($con, $_POST['nature_10_13A']);
			$all_amount_5=mysqli_real_escape_string($con, $_POST['house_rent']);

		$allowance_6=mysqli_real_escape_string($con, $_POST['nature_10_other']);
			$all_amount_6=mysqli_real_escape_string($con, $_POST['other_exemption']);



		$query="INSERT INTO `salary`(`PAN`, `salary_17_1`, `salary_17_2`, `salary_17_3`,`total_sal`,  `sal_other_emp`,`deduction_1`, `deduction_2`, `deduction_3`,`total_ded`,`income_house`,`income_other`, `relief`,`year`) VALUES ('$PAN','$section_17_1','$section_17_2','$section_17_3','$total_sal','$sal_other','$deduction_1','$deduction_2','$deduction_3','$total_ded','$income_house','$income_other','$relief','$year')";
		$run=mysqli_query($con,$query);
		if($run)
			echo "Salary Data inserted";
		else{
			echo "Data not inserted";
			echo mysqli_error($con);
		}

		
		$query4="INSERT INTO `allowance`(`PAN`, `nature`, `amount`,`year`) VALUES ('$PAN','$allowance_1','$all_amount_1','$year')";
		$query5="INSERT INTO `allowance`(`PAN`, `nature`, `amount`,`year`) VALUES ('$PAN','$allowance_2','$all_amount_2','$year')";
		$query6="INSERT INTO `allowance`(`PAN`, `nature`, `amount`,`year`) VALUES ('$PAN','$allowance_3','$all_amount_3','$year')";
		$query7="INSERT INTO `allowance`(`PAN`, `nature`, `amount`,`year`) VALUES ('$PAN','$allowance_4','$all_amount_4','$year')";
		$query8="INSERT INTO `allowance`(`PAN`, `nature`, `amount`,`year`) VALUES ('$PAN','$allowance_5','$all_amount_5','$year')";
		$query9="INSERT INTO `allowance`(`PAN`, `nature`, `amount`,`year`) VALUES ('$PAN','$allowance_6','$all_amount_6','$year')";
		
		$run4=mysqli_query($con,$query4);
		$run5=mysqli_query($con,$query5);
		$run6=mysqli_query($con,$query6);
		$run7=mysqli_query($con,$query7);
		$run8=mysqli_query($con,$query8);
		$run9=mysqli_query($con,$query9);
		if($run4&&$run5&&$run6&&$run7&&$run8&&$run9)
			echo "allowance Data inserted";
		else{
			echo "Allowance Data not inserted";
			echo mysqli_error($con);
		}
		include("insertdeduction.php");
		
	}
}
?>