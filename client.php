<?php
session_start(); 
if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
$year=$_POST['year'];

$con = mysqli_connect('localhost', 'root', '', 'form-16');
$q1="SELECT * FROM `client` ; ";
$run=mysqli_query($con,$q1);
?>
<html>
<head>
<title>client form-16</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script>
    $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
  </script>

<style type="text/css">
h1{
  font-size: 30px;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
  color: white;
  text-shadow: 2px 2px 4px #000000;
}
table{
   border-radius: 25px;
  width:100%;
  table-layout: fixed;
  border-collapse: collapse;
}

.container th h1 {
    font-weight: bold;
    font-size: 1em;
  text-align: left;
  color: #185875;
}

.container td {
    font-weight: normal;
    font-size: 1em;
  -webkit-box-shadow: 0 2px 2px -2px #0E1119;
     -moz-box-shadow: 0 2px 2px -2px #0E1119;
          box-shadow: 0 2px 2px -2px #0E1119;
}

.container {
    text-align: left;
    overflow: hidden;
    width: 80%;
    margin: 0 auto;
  display: table;
  padding: 0 0 8em 0;
}

.container td, .container th {
    padding-bottom: 2%;
    padding-top: 2%;
  padding-left:2%;  
}

/* Background-color of the odd rows */
.container tr:nth-child(odd) {
    background-color: #323C50;
}

/* Background-color of the even rows */
.container tr:nth-child(even) {
    background-color: #2C3446;
}

.container th {
    background-color: #1F2739;
}

.container td:first-child { color: #FB667A; }

.container tr:hover {
   background-color: #464A52;
-webkit-box-shadow: 0 6px 6px -6px #0E1119;
     -moz-box-shadow: 0 6px 6px -6px #0E1119;
          box-shadow: 0 6px 6px -6px #0E1119;
}

.container td:hover {
  background-color: #FFF842;
  color: #403E10;
  font-weight: bold;
  
  box-shadow: #7F7C21 -1px 1px, #7F7C21 -2px 2px, #7F7C21 -3px 3px, #7F7C21 -4px 4px, #7F7C21 -5px 5px, #7F7C21 -6px 6px;
  transform: translate3d(6px, -6px, 0);
  
  transition-delay: 0s;
    transition-duration: 0.4s;
    transition-property: all;
  transition-timing-function: line;
}

@media (max-width: 800px) {
.container td:nth-child(4),
.container th:nth-child(4) { display: none; }
}

th{
  padding: 15px;
  text-align: left;
  font-weight: 500;
  font-size: 28px;
  color: white;
  text-shadow: 2px 2px 4px #000000;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 24px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body {
  font-family: 'Open Sans', sans-serif;
  font-weight: 300;
  line-height: 1.42em;
  color:#A7A1AE;
  background-color:#FFFF;
}
section{
  margin: 50px;
}
</style>
</head>
<body>
<section>
  <h1>List of Clients</h1>
  <div class="tbl-header">
   <table class="container">
      <thead>
        <tr>
        <th><center>Name</center></th>
        <th><center>Fill</center></th>
        <th><center>View</center></th>
        <th><center>Send</center></th>
        </tr>
      </thead>
  </div>
  <tbody>
  <div class="tbl-content">
   
  <?php
  for($i=0;$i<mysqli_num_rows($run);$i++)
{
  $rw=mysqli_fetch_assoc($run);
  ?>
  <tr>
    <td><center><?php

      echo $rw['firstname']." ". $rw['lastname'];
      ?></center>
    </td>
    <form action="form16.php" method="post">
      <?php
        $PAN=$rw['PAN'];
        $qs="SELECT * FROM `salary` where `PAN`='$PAN' and `year`='$year';";
        $_SESSION['year']=$year;
        $runs=mysqli_query($con,$qs);
        $rows=mysqli_fetch_assoc($runs);

      ?>
      <td><center>
        <input type="hidden" name="PAN" id="PAN" value="<?php echo $rw['PAN']; ?>">
        <input type="submit" class="btn btn-success" name="fill_form16" value="Fill form16" <?php if(mysqli_num_rows($runs)==1)echo "disabled" ?> >
      </center></td>
      </form>
      <form action="template.php" method="post">
      <td><center>
        <input type="hidden" name="PAN" id="PAN" value="<?php echo $rw['PAN']; ?>">
        <input type="submit" class="btn btn-success" name="view_form16" value="view form16">
      </center></td>
      </form>
      <form action="sendmail.php" method="post">
      <td><center>
        <input type="hidden" name="PAN" id="PAN" value="<?php echo $rw['PAN']; ?>">
        <input type="submit" class="btn btn-success" name="send_form16" value="send mail">
      </center></td>
      </form>
    </form>
  </tr>
  <?php
}
?>
  </tbody>
</div>
</table>

,<center><a href="logout.php" class="btn btn-success">Logout</a></center>
</body>
</html>
