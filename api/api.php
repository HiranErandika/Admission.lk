<?php
header("Content-Type:application/json");
include('db.php');

//http://localhost/admission/Admission.lk/api/api/student/1  =  http://localhost/admission/Admission.lk/api/api.php?sid=1
//http://localhost/admission/Admission.lk/api/api.php?sid=1&update=true&sex=Male

if (isset($_GET['order_id']) && $_GET['order_id'] != "") {
	$order_id = $_GET['order_id'];
	$result = mysqli_query($con, "SELECT * FROM `transactions` WHERE order_id=$order_id");
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		$amount = $row['amount'];
		$response_code = $row['response_code'];
		$response_desc = $row['response_desc'];
		response($order_id, $amount, $response_code, $response_desc);
		mysqli_close($con);
	} else {
		response(NULL, NULL, 200, "No Record Found");
	}
} else if (checkIsset('sid') && $_GET['update'] != 'true') {
	$sid = $_GET['sid'];
	$result = mysqli_query($con, "SELECT * FROM `student` WHERE sid=$sid");
	if (mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_array($result);
		$sid = $row['sid'];
		$fullname = $row['fullname'];
		$shortname = $row['shortname'];
		$religion = $row['religion'];
		$locale = $row['locale'];
		$dob = $row['dob'];
		$sex = $row['sex'];
		$prox_mark = $row['prox_mark'];
		$alum_mark = $row['alum_mark'];
		$sib_mark = $row['sib_mark'];
		$staff_mark = $row['staff_mark'];
		$officer_mark = $row['officer_mark'];
		$foreign_mark = $row['foreign_mark'];
		$best_cat = $row['best_cat'];


		responseStudentProfile($sid, $fullname, $shortname, $religion, $locale, $dob, $sex, $prox_mark, $alum_mark, $sib_mark, $staff_mark, $officer_mark, $foreign_mark, $best_cat);
		mysqli_close($con);
	} else {
		response(NULL, NULL, 200, "No Record Found");
	}
} else if (checkIsset('update')) {
	$sid = $_GET['sid'];
	$query = "UPDATE `student` SET ";

	if (checkIsset('fullname')) {
		$fullname = $_GET['fullname'];
		$query .= "`fullname` ='" . $fullname . "',";
	}
	if (checkIsset('shortname')) {
		$shortname = $_GET['shortname'];
		$query .= "`shortname` ='" . $shortname . "',";
	}
	if (checkIsset('religion')) {
		$religion = $_GET['religion'];
		$query .= "`religion` ='" . $religion . "',";
	}
	if (checkIsset('locale')) {
		$locale = $_GET['locale'];
		$query .= "`locale` ='" . $locale . "',";
	}
	if (checkIsset('dob')) {
		$dob = $_GET['dob'];
		$query .= "`dob` ='" . $dob . "',";
	}
	if (checkIsset('sex')) {
		$sex = $_GET['sex'];
		$query .= "`sex` ='" . $sex . "',";
	}
	if (checkIsset('prox_mark')) {
		$prox_mark = $_GET['prox_mark'];
		$query .= "`prox_mark` ='" . $prox_mark . "',";
	}
	if (checkIsset('alum_mark')) {
		$alum_mark = $_GET['alum_mark'];
		$query .= "`alum_mark` ='" . $alum_mark . "',";
	}
	if (checkIsset('sib_mark')) {
		$sib_mark = $_GET['sib_mark'];
		$query .= "`sib_mark` ='" . $sib_mark . "',";
	}
	if (checkIsset('staff_mark')) {
		$staff_mark = $_GET['staff_mark'];
		$query .= "`staff_mark` ='" . $staff_mark . "',";
	}
	if (checkIsset('officer_mark')) {
		$officer_mark = $_GET['officer_mark'];
		$query .= "`officer_mark` ='" . $officer_mark . "',";
	}
	if (checkIsset('foreign_mark')) {
		$foreign_mark = $_GET['foreign_mark'];
		$query .= "`foreign_mark` ='" . $foreign_mark . "',";
	}
	//Start from Here
	if (checkIsset('foreign_mark')) {
		$foreign_mark = $_GET['foreign_mark'];
		$query .= "`foreign_mark` ='" . $foreign_mark . "',";
	}
	if (checkIsset('foreign_mark')) {
		$foreign_mark = $_GET['foreign_mark'];
		$query .= "`foreign_mark` ='" . $foreign_mark . "',";
	}
	if (checkIsset('foreign_mark')) {
		$foreign_mark = $_GET['foreign_mark'];
		$query .= "`foreign_mark` ='" . $foreign_mark . "',";
	}

	if (endswith($query, ',')) {
		$query = substr($query, 0, -1);
		$query .= " WHERE `sid` = " . $sid . "";
		//echo $query;
	} else {
		response(NULL, NULL, 400, "Invalid Request");
	}

	if (mysqli_query($con, $query)) {
		//Response
		// mysqli_close($con);
		$sid = $_GET['sid'];
		$result = mysqli_query($con, "SELECT * FROM `student` WHERE sid=$sid");
		if (mysqli_num_rows($result) > 0) {
			$row = mysqli_fetch_array($result);
			$sid = $row['sid'];
			$fullname = $row['fullname'];
			$shortname = $row['shortname'];
			$religion = $row['religion'];
			$locale = $row['locale'];
			$dob = $row['dob'];
			$sex = $row['sex'];
			$prox_mark = $row['prox_mark'];
			$alum_mark = $row['alum_mark'];
			$sib_mark = $row['sib_mark'];
			$staff_mark = $row['staff_mark'];
			$officer_mark = $row['officer_mark'];
			$foreign_mark = $row['foreign_mark'];
			$best_cat = $row['best_cat'];


			responseStudentProfile($sid, $fullname, $shortname, $religion, $locale, $dob, $sex, $prox_mark, $alum_mark, $sib_mark, $staff_mark, $officer_mark, $foreign_mark, $best_cat);
			mysqli_close($con);}
			//End of Response
		} else {
			response(NULL, $query, 400, "Error updating record: " . mysqli_error($con));
		}
	} else {
		response(NULL, NULL, 400, "Invalid Request");
	}


	function checkIsset($field)
	{
		return isset($_GET[$field]) && $_GET[$field] != "";
	}
	function endsWith($haystack, $needle)
	{
		$length = strlen($needle);
		if ($length == 0) {
			return true;
		}

		return (substr($haystack, -$length) === $needle);
	}

	function responseStudentProfile($sid, $fullname, $shortname, $religion, $locale, $dob, $sex, $prox_mark, $alum_mark, $sib_mark, $staff_mark, $officer_mark, $foreign_mark, $best_cat)
	{
		$response['sid'] = $sid;
		$response['fullname'] = $fullname;
		$response['shortname'] = $shortname;
		$response['religion'] = $religion;
		$response['locale'] = $locale;
		$response['dob'] = $dob;
		$response['sex'] = $sex;
		$response['prox_mark'] = $prox_mark;
		$response['alum_mark'] = $alum_mark;
		$response['sib_mark'] = $sib_mark;
		$response['staff_mark'] = $staff_mark;
		$response['officer_mark'] = $officer_mark;
		$response['foreign_mark'] = $foreign_mark;
		$response['best_cat'] = $best_cat;

		$json_response = json_encode($response);
		echo $json_response;
	}

	function response($order_id, $amount, $response_code, $response_desc)
	{
		$response['order_id'] = $order_id;
		$response['amount'] = $amount;
		$response['response_code'] = $response_code;
		$response['response_desc'] = $response_desc;

		$json_response = json_encode($response);
		echo $json_response;
	}
