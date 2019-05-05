<html>
<head>
<title>Demo</title>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div style="width:700px; margin:0 auto;">

<h3>Demo Create and Consume Simple REST API in PHP</h3>   
<form action="" method="POST">
<label>Enter ID:</label><br />
<input type="text" name="sid" placeholder="Enter SID" required/>
<input type="text" name="shortname" id="shortname" placeholder="Enter Short Name" required/>
<br /><br />
<button type="submit" name="submit">Submit</button>
</form>    

<?php
if (isset($_POST['sid']) && $_POST['sid']!="") {
	$sid = $_POST['sid'];
	$shortName = $_POST['shortname'];
	$url = "http://localhost/admission/Admission.lk/api/api.php?sid=".$sid."&update=true&shortname=".$shortName;
	
	$client = curl_init($url);
	curl_setopt($client,CURLOPT_RETURNTRANSFER,true);
	$response = curl_exec($client);
	$result = json_decode($response);
	
	echo "<table>";
	echo "<tr><td>SID : </td><td>$result->sid</td></tr>";
	echo "<tr><td>Full Name : </td><td>$result->fullname</td></tr>";
	echo "<tr><td>Short Name:</td><td>$result->shortname</td></tr>";
	echo "<tr><td>DOB : </td><td>$result->dob</td></tr>";
	echo "</table>";
}
    ?>

<br />
<strong>Sample IDs for Demo:</strong><br />
15478952<br />
15478955<br />
15478958<br />
15478959
<br /><br />
</div>
</body>
</html>