<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="style1.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
      

</head>
<body>
    
    <header class="header1">
        <div class="heading">
           <h1 class="title">P.V.R.A.D SERVICES<hr/></h1>
                   </div>
    </header>
  <nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
       <li><a href="index.php" class="active">HOME</a></li>
        <li><a href="#" >ABOUT US</a></li>
       <?php
      if(isset($_SESSION['username']))
       {
        ?>
         <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
    <?php }else { ?>

      <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    
    <?php } ?>
      
              
    </ul>
 </nav>
       
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
      
          <!-- Wrapper for slides -->
          <div class="carousel-inner">
            <div class="item active">
              <img src="1.jpeg" alt="Los Angeles"  height="450px" width="1900px">
            </div>
      
            <div class="item">
              <img src="2.jpeg" alt="Chicago" height="450px" width="1900px">
            </div>
          
            <div class="item">
              <img src="3.jpeg" alt="New york"height="450px" width="1900px">
            </div>
          </div>
      
          <!-- Left and right controls -->
          <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
       
      
    
    <div class="container" style="margin-top:20px;margin-bottom: 80px;">
    <div class="header2">
        <h1>
            <span class="colorchange">Welcome to P.V.R.A.D</span>
        </h1>
        <P class="con">P.V.R.A.D Corporate is one stop for Industry solutions. We basically deal into three domains IT Support & Software Solutions, Supply Chain Management and Overseas Education.
        </P>
        <p class="con">IT Support and Software Solutions is our core Vertical. Here we provide complete-cycle Software Development to small or large businesses for their individual needs. As an experienced software application developer, the production of custom software applications is our area of expertise.</p>
        <p class="con">We guarantee an excellent standard of customer service. In order to achieve this, we offer an exclusive service to all of our customers. For optimum customer satisfaction, we allocate a dedicated manager to ensure the smooth and efficient running of every individual project. This allows us to respond promptly to changes raised by our customer, and to provide the specific support for each project’s effective development.</p>
    </div>
</div>
    <br>
    
</body>
</html>