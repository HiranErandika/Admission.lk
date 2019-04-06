

<?php
    session_start();

   //connect to database

   $db = mysqli_connect("localhost", "root", "", "authentication");

   if(isset($_POST['login_btn'])) {
  // session_start();s	
   $username = mysqli_real_escape_string($db,$_POST['username']);
   $password = mysqli_real_escape_string($db,$_POST['password']);
   

   $password = md5($password); //hash the pw
   $sql = "SELECT * FROM users WHERE username= '$username' AND password= '$password'";
   $result = mysqli_query($db, $sql);

   if(mysqli_num_rows($result) == 1 ){

   	$_SESSION['message'] = "you are now logged in";
   	$_SESSION['username'] = $username;
   	header("location: home.php"); //redirect to home page

   }else{
   			$_SESSION['message'] = "Username/Password combination is incorrect";

   }


}
?>   

<!DOCTYPE html>
<html>
<head>
<!--Navbar Boostrap-->	
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
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Admission.lk</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li> <a href="http://localhost/Admission.lk/authentication/login.php">Login</a></li>
      <li><a href="http://localhost/Admission.lk/authentication/register.php">Signup</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><font color="white"> Welcome to Admission.lk</font></a>
<ul class="dropdown-menu">
          <li><a href="#">Dashbord</a></li>
          <li><a href="logout.php">logout</a></li>
         
        </ul>
      </li>
     
    </ul>
  </div>
</nav>

	<header>
			
	</header>


	<div class="main-agileinfo">
		<div class="agileits-top">
		<form action="login.php" method="post">
		<input class="text" type="text" name="username" placeholder="username" required="">
		<input class="text" type="password" name="password" placeholder="password" required="">

	<?php
	if (isset($_SESSION['message'])){
		echo "<div id ='error_msg'>".$_SESSION['message']."</div>";
		unset($_SESSION['message']);
	}
	?>		
		<input type="submit" name="login_btn" value="LOGIN">
		</form>


<p>Don't have an Account! <a href="http://localhost/Admission.lk/authentication/register.php"> Signup Now!</a></p>
		</div>
			<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>

<div class="footer" style="height: 8%">
<br>
  <p> © 2019 | Admission.lk</p>
</div>	

</body>
</html>





