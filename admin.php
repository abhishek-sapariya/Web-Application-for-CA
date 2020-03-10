<?php
session_start();
if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}
$con = mysqli_connect('localhost', 'root', '', 'form-16');

$q="SELECT DISTINCT year FROM `tax_cal` ;";
$run=mysqli_query($con,$q);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    input,select{
    display: inline-block;
    float: left;
    margin-left: 5px;
    }

    label{
      display: inline-block;
      float: left;
      clear: left;
      width: 600px;
      text-align: right;
    }

    select{
    width: 50%;
      padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input:focus {
  border: 3px solid #555;
}

#abc{
  font-size: 50px;
  text-align: center;
}

  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">P.V.R.A.D Services</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="register.php">Registraton of client</span></a>
      </li>
      <li><a href="new_tax.html">Tax entry of new A.Y</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php
      if(isset($_SESSION['username']))
       {
        ?>
         <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    <?php }else { ?>

      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    
    <?php } ?></ul>
  </div>
</nav>
  
<center><div class="container"  >
  <form action="client.php" method="post">
  <h3>Select Year for form-16 details:</h3>
  <select name="year" id="year">
    <?php
      for ($i=0; $i < mysqli_num_rows($run); $i++) { 
        $row=mysqli_fetch_assoc($run);

      
    ?>
    <option value="<?php echo $row['year']; ?>"><?php echo $row['year']; ?></option>
    <?php
  }

  ?>
  </select><br>
  <input type="submit" class="btn btn-primary">
</form>
</div>
</center>

</body>
</html>