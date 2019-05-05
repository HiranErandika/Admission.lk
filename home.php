
<?php
    session_start();

?>   
<?php
	if (isset($_SESSION['message'])){
		echo "<div id ='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name ="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<title></title>

<link rel="stylesheet" type="text/css" href="style.css">
	<!--fooer internal css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: black;
   color: white;
   text-align: center;
}
</style>	
</head>
<body>
​<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/Admission.lk/authentication/login.php">Admission.lk</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>Welcome to Admission.lk <?php echo $_SESSION['username']; ?></a>
<ul class="dropdown-menu">
          <li><a href="#">Signup</a></li>
          <li><a href="logout.php">Logout</a></li>
         
        </ul>
      </li>
     
    </ul>
  </div>
</nav>
	<!--Header-->
	<header>
	</header>

<!-- Applicant Category-->
<div class="container-fluid">
  <h1>Applicant Category</h1>
  <br>
  <p align="center">Please Select under which category do you wish to apply your child.</p>
  <br>
  <br>	 
  <div class="row">
    <div class="col-sm-4" ><center> <a href = "http://localhost/Admission.lk/authentication/fixedcat.php"><img src="IMG_1.jpg" style="width:40%; height:50"></a> </center> </div>
	<div class="col-sm-4" ><center> <a href = "http://localhost/Admission.lk/authentication/fixedcat.php"><img src="IMG_2.jpg" style="width:40%; height:50"></a> </center> </div>
    <div class="col-sm-4" ><center> <a href = "http://localhost/Admission.lk/authentication/fixedcat.php"><img src="IMG_3.jpg" style="width:40%; height:50"></a> </center> </div>
	</div>
	<br>
  <div class="row">
    <div class="col-sm-4" ><center> <a href = "http://localhost/Admission.lk/authentication/fixedcat.php"><img src="IMG_4.jpg" style="width:40%; height:50"></a> </center> </div>
	<div class="col-sm-4" ><center> <a href = "http://localhost/Admission.lk/authentication/fixedcat.php"><img src="IMG_5.jpg" style="width:40%; height:50"></a> </center> </div>
    <div class="col-sm-4" ><center> <a href = "http://localhost/Admission.lk/authentication/fixedcat.php"><img src="IMG_6.jpg" style="width:40%; height:50"></a> </center> </div>
	</div>
</div>


<!--Sticky Footer-->
<div class="footer" style="height: 8%">
<br>
  <p> © 2019 | Admission.lk</p>
</div>	
</body>
</html>







