<?php
$con = mysqli_connect('localhost', 'root', '', 'form-16');
$year=$_POST['year'];
$age=$_POST['age'];
$tax=$_POST['tax'];
$additional_tax=$_POST['add_tax'];
$surcharge=$_POST['Surcharge'];
$max=$_POST['max'];
$min=$_POST['min'];
$cess=$_POST['cess'];

$qt="INSERT INTO `tax_cal`(`year`, `age`, `tax%`, `additional_tax`, `surcharge`, `max`, `min`, `cess`) VALUES ('$year','$age','$tax','$additional_tax','$surcharge','$max','$min','$cess')";
$runt=mysqli_query($con,$qt);
if($runt)
{
	echo "Tax Data Inserted";
}
else
	echo "Tax Data not Inserted";
?>