<!DOCTYPE html>
<html lang="en">

<?php
include('api/db.php');
if (isset($_GET['sid']) && $_GET['sid'] != "") {
	$sid = $_GET['sid'];
	$jsonData = getData('http://localhost/Admission.lk/authentication/api/api.php?update=false&sid=' . $sid);
} else {
	$_GET['sid'] = 111;
}


function getData($url)
{
	$curlSession = curl_init();
	curl_setopt($curlSession, CURLOPT_URL, $url);
	curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
	curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
	$jsonData = json_decode(curl_exec($curlSession), true);
	curl_close($curlSession);
	return $jsonData;
}
?>

<head>
	<title>Admission.lk</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Admission Form</h2>
		<p>Dear Parent/Guardian,<br> Welcome to our School's Admission Center.Please use this form to apply for your child's Admission to your school.We need complete and accurate information about the <br> student.So make sure you will fill out all fields. School Admission Forms are processed within 48 hours. You will receive an email confiramation when we process your <br> application. </p>
		<form>
			<?php
			if (isset($_GET['save'])) {
				echo "Saved";
				$snam1 = $_GET['snam1'];
				$snam2 = $_GET['snam2'];
				$snam3 = $_GET['snam3'];
				$snam4 = $_GET['snam4'];
				$snam5 = $_GET['snam5'];
				$snam6 = $_GET['snam6'];
				$snam7 = $_GET['snam7'];
				$snam8 = $_GET['snam8'];
				$snam9 = $_GET['snam9'];
				$snam10 = $_GET['snam10'];

				$y1 = $_GET['y1'];
				$ed1 = $_GET['ed1'];
				$gn1 = $_GET['gn1'];
				$pd1 = $_GET['pd1'];
				$hn1 = $_GET['hn1'];
				$sn1 = $_GET['sn1'];
				$ne1 = $_GET['ne1'];

				$y2 = $_GET['y2'];
				$ed2 = $_GET['ed2'];
				$gn2 = $_GET['gn2'];
				$pd2 = $_GET['pd2'];
				$hn2 = $_GET['hn2'];
				$sn2 = $_GET['sn2'];
				$ne2 = $_GET['ne2'];

				$y3 = $_GET['y3'];
				$ed3 = $_GET['ed3'];
				$gn3 = $_GET['gn3'];
				$pd3 = $_GET['pd3'];
				$hn3 = $_GET['hn3'];
				$sn3 = $_GET['sn3'];
				$ne3 = $_GET['ne3'];

				$url = 'http://localhost/Admission.lk/authentication/api/api.php?update=true&sid=' . urlencode($sid) . "&fullname=" . urlencode($nif) . "&shortname=" . urlencode($nwi) . "&religion=" . urlencode($rel) . "&dob=" . urlencode($dob) . "&prox_gfullname=" . urlencode($pnif) . "&prox_gshortname=" . urlencode($pnwi) . "&prox_gnic=" . urlencode($nic) . "&prox_greligion=" . urlencode($prel) . "&prox_paddress=" . urlencode($padd) . "&prox_telephone=" . urlencode($tpnum) . "&prox_district=" . urlencode($resd) . "&prox_divsec=" . urlencode($resa) . "&prox_scl1Name=" . urlencode($nos1) . "&prox_scl1cat=" . urlencode($cos1) . "&prox_scl1dist=" . urlencode($dts1) . "&prox_scl2Name=" . urlencode($nos2) . "&prox_scl2cat=" . urlencode($cos2) . "&prox_scl2dist=" . urlencode($dts2) . "&prox_scl3Name=" . urlencode($nos3) . "&prox_scl3cat=" . urlencode($cos3) . "&prox_scl3dist=" . urlencode($dts3) . "&prox_scl4Name=" . urlencode($nos4) . "&prox_scl4cat=" . urlencode($cos4) . "&prox_scl4dist=" . urlencode($dts4) . "&prox_scl15Name=" . urlencode($nos5) . "&prox_scl5cat=" . urlencode($cos5) . "&prox_scl5dist=" . urlencode($dts5) . "&prox_scl6Name=" . urlencode($nos6) . "&prox_scl6cat=" . urlencode($cos6) . "&prox_scl6dist=" . urlencode($dts6);
				//$url = 'http://localhost/Admission.lk/authentication/api/api.php?update=true&sid=1&update=true&shortname=KVHE&abc=&gfds=';

				//echo "<br>" . $url . "<br>";
				$resp = file_get_contents("$url");

				header('Location: http://localhost/Admission.lk/authentication/cat'.$_GET['cat'] . ".php");
			}

			?>
			<input name="update" value="true" hidden><input name="sid" value="1" hidden><input name="cat" value="<?php echo $_GET['cat']; ?>" hidden>

			<div class="form-group col-sm-12">
				<h4>4.0 Other schools where the child could be admitted and located closer to your place of residence than the school applied by this application:</h4>
			</div>

			<div class="form-group">
				<table border="0" width="100%">
					<tr>
						<td>1</td>
						<td><input name="snam1" id="snam1" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>2</td>
						<td><input name="snam2" id="snam2" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>3</td>
						<td><input name="snam3" id="snam3" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>4</td>
						<td><input name="snam4" id="snam4" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>5</td>
						<td><input name="snam5" id="snam5" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>6</td>
						<td><input name="snam6" id="snam6" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>7</td>
						<td><input name="snam7" id="snam7" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>8</td>
						<td><input name="snam8" id="snam8" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>9</td>
						<td><input name="snam9" id="snam9" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>10</td>
						<td><input name="snam10" id="snam10" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
				</table>
			</div>
			<div class="form-group col-sm-12">
				<h4>5.0 Electoral List Registration.</h4>
			</div>
			<div class="col-sm-2"></div>
			<div class="form-group col-sm-8">
				<center>
					<h5 style="font-size:20px;font">Year 01</h5>
				</center>
				<table border="0" width="100%">
					<tr>
						<td>Year</td>
						<td><input name="y1" id="y1" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>Electoral District</td>
						<td><input name="ed1" id="ed1" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>Grama Niladhari Div.and No</td>
						<td><input name="gn1" id="gn1" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td>Polling Division:</td>
						<td><input name="pd1" id="pd1" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td style="width:20%">Street /Road/ Village</td>
						<td style="width:80%"><input name="str1" id="str1" class="form-control" type="text" style="width:90%"></td>
						<td><br><br></td>
					</tr>
					<tr>
						<td colspan="2">
							<table border="0" width="100%">
								<tr>
									<th>Household No</th>
									<th>Serial No</th>
									<th>Name of Electors (Parents/Guardian)</th>
								</tr>
								<tr>
									<td><input name="hn1" id="hn1" class="form-control" type="text" style="width:90%"></td>
									<td><input name="sn1" id="sn1" class="form-control" type="text" style="width:90%"></td>
									<td><textarea name="ne1" id="ne1" class="form-control" type="text" style="width:90%"></textarea></td>
								</tr>
						</td>
				</table>
				</tr>
				</table>

			</div>

			<div class="col-sm-2"></div>


			<div class="form-group col-sm-12">
				<div class="form-group col-sm-2"></div>
				<div class="form-group col-sm-8">

					<center>
						<h5 style="font-size:20px;font">Year 02</h5>
					</center>
					<table border="0" width="100%">
						<tr>
							<td>Year</td>
							<td><input name="y2" id="y2" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Electoral District</td>
							<td><input name="ed2" id="ed2" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Grama Niladhari Div.and No</td>
							<td><input name="gn2" id="gn2" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Polling Division:</td>
							<td><input name="pd2" id="pd2" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td style="width:20%">Street /Road/ Village</td>
							<td style="width:80%"><input name="str2" id="str2" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table border="0" width="100%">
									<tr>
										<th>Household No</th>
										<th>Serial No</th>
										<th>Name of Electors (All persons)</th>
									</tr>
									<tr>
										<td><input name="hn2" id="hn2" class="form-control" type="text" style="width:90%"></td>
										<td><input name="sn2" id="sn2" class="form-control" type="text" style="width:90%"></td>
										<td><textarea name="ne2" id="ne2" class="form-control" type="text" style="width:90%"></textarea></td>
									</tr>
							</td>
					</table>
					</tr>
					</table>
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="form-group col-sm-12">
				<div class="form-group col-sm-2"></div>
				<div class="form-group col-sm-8">

					<center>
						<h5 style="font-size:20px;font">Year 03</h5>
					</center>
					<table border="0" width="100%">
						<tr>
							<td>Year</td>
							<td><input name="y3" id="y3" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Electoral District</td>
							<td><input name="ed3" id="ed3" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Grama Niladhari Div.and No</td>
							<td><input name="gn3" id="gn3" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Polling Division:</td>
							<td><input name="pd3" id="pd3" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td style="width:20%">Street /Road/ Village</td>
							<td style="width:80%"><input name="str3" id="str3" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table border="0" width="100%">
									<tr>
										<th>Household No</th>
										<th>Serial No</th>
										<th>Name of Electors (All persons)</th>
									</tr>
									<tr>
										<td><input name="hn3" id="hn3" class="form-control" type="text" style="width:90%"></td>
										<td><input name="sn3" id="sn3" class="form-control" type="text" style="width:90%"></td>
										<td><textarea name="ne3" id="ne3" class="form-control" type="text" style="width:90%"></textarea></td>
									</tr>
							</td>
					</table>
					</tr>
					</table>
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="form-group col-sm-12">
				<div class="form-group col-sm-2"></div>
				<div class="form-group col-sm-8">

					<center>
						<h5 style="font-size:20px;font">Year 04</h5>
					</center>
					<table border="0" width="100%">
						<tr>
							<td>Year</td>
							<td><input name="y4" id="y4" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Electoral District</td>
							<td><input name="ed4" id="ed4" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Grama Niladhari Div.and No</td>
							<td><input name="gn4" id="gn4" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Polling Division:</td>
							<td><input name="pd4" id="pd4" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td style="width:20%">Street /Road/ Village</td>
							<td style="width:80%"><input name="str4" id="str4" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table border="0" width="100%">
									<tr>
										<th>Household No</th>
										<th>Serial No</th>
										<th>Name of Electors (All persons)</th>
									</tr>
									<tr>
										<td><input name="hn4" id="hn4" class="form-control" type="text" style="width:90%"></td>
										<td><input name="sn4" id="sn4" class="form-control" type="text" style="width:90%"></td>
										<td><textarea name="ne4" id="ne4" class="form-control" type="text" style="width:90%"></textarea></td>
									</tr>
							</td>
					</table>
					</tr>
					</table>
				</div>
				<div class="col-sm-2"></div>
			</div>
			<div class="form-group col-sm-12">
				<div class="form-group col-sm-2"></div>
				<div class="form-group col-sm-8">

					<center>
						<h5 style="font-size:20px;font">Year 05</h5>
					</center>
					<table border="0" width="100%">
						<tr>
							<td>Year</td>
							<td><input name="y5" id="y5" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Electoral District</td>
							<td><input name="ed5" id="ed5" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Grama Niladhari Div.and No</td>
							<td><input name="gn5" id="gn5" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td>Polling Division:</td>
							<td><input name="pd5" id="pd5" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td style="width:20%">Street /Road/ Village</td>
							<td style="width:80%"><input name="str5" id="str5" class="form-control" type="text" style="width:90%"></td>
							<td><br><br></td>
						</tr>
						<tr>
							<td colspan="2">
								<table border="0" width="100%">
									<tr>
										<th>Household No</th>
										<th>Serial No</th>
										<th>Name of Electors (All persons)</th>
									</tr>
									<tr>
										<td><input name="hn5" id="hn5" class="form-control" type="text" style="width:90%"></td>
										<td><input name="sn5" id="sn5" class="form-control" type="text" style="width:90%"></td>
										<td><textarea name="ne5" id="ne5" class="form-control" type="text" style="width:90%"></textarea></td>
									</tr>
							</td>
					</table>
					</tr>
					</table>
				</div>
				<div class="col-sm-2"></div>

				<div class="form-group col-sm-11"></div>
				<div class="form-group col-sm-1">
					<a href="http://localhost/Admission.lk/authentication/cat<?php echo ($_GET['cat'] . ".php"); ?>">
						<button type="submit" form="nameform" value="save" class="btn btn-success">Next</button> </a>
				</div>



			</div>

		</form>

	</div>

</body>

</html>