<?php

$con = mysqli_connect('localhost', 'root', '', 'form-16');
	if(!$con)
		echo "Connection to server not established.";
	else{
		
		$q1="SELECT * FROM `salary` WHERE `PAN`='$PAN' and `year`='$year';";
		$run1=mysqli_query($con,$q1);
		$row1=mysqli_fetch_assoc($run1);
		if($run1)
	
		$q2="SELECT * FROM `allowance` WHERE `PAN`='$PAN' and `nature`='section_10_5' and `year`='$year'";
		$run2=mysqli_query($con,$q2);
		$row2=mysqli_fetch_assoc($run2);
		$q3="SELECT * FROM `allowance` WHERE `PAN`='$PAN' and `nature`='section_10_10' and `year`='$year'";
		$run3=mysqli_query($con,$q3);
		$row3=mysqli_fetch_assoc($run3);
		$q4="SELECT * FROM `allowance` WHERE `PAN`='$PAN' and `nature`='section_10_10A' and `year`='$year'";
		$run4=mysqli_query($con,$q4);
		$row4=mysqli_fetch_assoc($run4);
		$q5="SELECT * FROM `allowance` WHERE `PAN`='$PAN' and `nature`='section_10_10AA' and `year`='$year'";
		$run5=mysqli_query($con,$q5);
		$row5=mysqli_fetch_assoc($run5);
		$q6="SELECT * FROM `allowance` WHERE `PAN`='$PAN' and `nature`='section_10_13A' and `year`='$year'";
		$run6=mysqli_query($con,$q6);
		$row6=mysqli_fetch_assoc($run6);
		$q7="SELECT * FROM `allowance` WHERE `PAN`='$PAN' and `nature`='section_10_other' and `year`='$year'";
		$run7=mysqli_query($con,$q7);
		$row7=mysqli_fetch_assoc($run7);
		$q8="SELECT * FROM `deductions` WHERE `PAN`='$PAN' and `year`='$year';";
		$run8=mysqli_query($con,$q8);
		$row8=mysqli_fetch_assoc($run8);
		$q9="SELECT * FROM `80d` WHERE `PAN`='$PAN' and `year`='$year';";
		$run9=mysqli_query($con,$q9);
		$row9=mysqli_fetch_assoc($run9);
		$q10="SELECT * FROM `client` where `PAN`='$PAN';";
		$run10=mysqli_query($con,$q10);
		$row10=mysqli_fetch_assoc($run10);
	}

?>