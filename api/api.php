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
	if (checkIsset('best_cat')) {
		$best_cat = $_GET['best_cat'];
		$query .= "`best_cat` ='" . $best_cat . "',";
	}
	if (checkIsset('prox_gfullname')) {
		$prox_gfullname = $_GET['prox_gfullname'];
		$query .= "`prox_gfullname` ='" . $prox_gfullname . "',";
	}
	if (checkIsset('prox_gshortname')) {
		$prox_gshortname = $_GET['prox_gshortname'];
		$query .= "`prox_gshortname` ='" . $prox_gshortname . "',";
	}
	if (checkIsset('prox_gnic')) {
		$prox_gnic = $_GET['prox_gnic'];
		$query .= "`prox_gnic` ='" . $prox_gnic . "',";
	}
	if (checkIsset('prox_gislankan')) {
		$prox_gislankan = $_GET['prox_gislankan'];
		$query .= "`prox_gislankan` ='" . $prox_gislankan . "',";
	}
	if (checkIsset('prox_greligion')) {
		$prox_greligion = $_GET['prox_greligion'];
		$query .= "`prox_greligion` ='" . $prox_greligion . "',";
	}
	if (checkIsset('prox_paddress')) {
		$prox_paddress = $_GET['prox_paddress'];
		$query .= "`prox_paddress` ='" . $prox_paddress . "',";
	}
	if (checkIsset('prox_telephone')) {
		$prox_telephone = $_GET['prox_telephone'];
		$query .= "`prox_telephone` ='" . $prox_telephone . "',";
	}
	if (checkIsset('prox_district')) {
		$prox_district = $_GET['prox_district'];
		$query .= "`prox_district` ='" . $prox_district . "',";
	}
	if (checkIsset('prox_divsec')) {
		$prox_divsec = $_GET['prox_divsec'];
		$query .= "`prox_divsec` ='" . $prox_divsec . "',";
	}
	if (checkIsset('prox_gndiv')) {
		$prox_gndiv = $_GET['prox_gndiv'];
		$query .= "`prox_gndiv` ='" . $prox_gndiv . "',";
	}
	if (checkIsset('prox_scl1name')) {
		$prox_scl1name = $_GET['prox_scl1name'];
		$query .= "`prox_scl1name` ='" . $prox_scl1name . "',";
	}
	if (checkIsset('prox_scl1cat')) {
		$prox_scl1cat = $_GET['prox_scl1cat'];
		$query .= "`prox_scl1cat` ='" . $prox_scl1cat . "',";
	}
	if (checkIsset('prox_scl1dist')) {
		$prox_scl1dist = $_GET['prox_scl1dist'];
		$query .= "`prox_scl1dist` ='" . $prox_scl1dist . "',";
	}
	if (checkIsset('prox_scl2name')) {
		$prox_scl2name = $_GET['prox_scl2name'];
		$query .= "`prox_scl2name` ='" . $prox_scl2name . "',";
	}
	if (checkIsset('prox_scl2cat')) {
		$prox_scl2cat = $_GET['prox_scl2cat'];
		$query .= "`prox_scl2cat` ='" . $prox_scl2cat . "',";
	}
	if (checkIsset('prox_scl2dist')) {
		$prox_scl2dist = $_GET['prox_scl2dist'];
		$query .= "`prox_scl2dist` ='" . $prox_scl2dist . "',";
	}
	if (checkIsset('prox_scl3name')) {
		$prox_scl3name = $_GET['prox_scl3name'];
		$query .= "`prox_scl3name` ='" . $prox_scl3name . "',";
	}
	if (checkIsset('prox_scl3cat')) {
		$prox_scl3cat = $_GET['prox_scl3cat'];
		$query .= "`prox_scl3cat` ='" . $prox_scl3cat . "',";
	}
	if (checkIsset('prox_scl3dist')) {
		$prox_scl3dist = $_GET['prox_scl3dist'];
		$query .= "`prox_scl3dist` ='" . $prox_scl3dist . "',";
	}
	if (checkIsset('prox_scl4name')) {
		$prox_scl4name = $_GET['prox_scl4name'];
		$query .= "`prox_scl4name` ='" . $prox_scl4name . "',";
	}
	if (checkIsset('prox_scl4cat')) {
		$prox_scl4cat = $_GET['prox_scl4cat'];
		$query .= "`prox_scl4cat` ='" . $prox_scl4cat . "',";
	}
	if (checkIsset('prox_scl4dist')) {
		$prox_scl4dist = $_GET['prox_scl4dist'];
		$query .= "`prox_scl4dist` ='" . $prox_scl4dist . "',";
	}
	if (checkIsset('prox_scl5name')) {
		$prox_scl5name = $_GET['prox_scl5name'];
		$query .= "`prox_scl5name` ='" . $prox_scl5name . "',";
	}
	if (checkIsset('prox_scl5cat')) {
		$prox_scl5cat = $_GET['prox_scl5cat'];
		$query .= "`prox_scl5cat` ='" . $prox_scl5cat . "',";
	}
	if (checkIsset('prox_scl5dist')) {
		$prox_scl5dist = $_GET['prox_scl5dist'];
		$query .= "`prox_scl5dist` ='" . $prox_scl5dist . "',";
	}
	if (checkIsset('prox_scl6name')) {
		$prox_scl6name = $_GET['prox_scl6name'];
		$query .= "`prox_scl6name` ='" . $prox_scl6name . "',";
	}
	if (checkIsset('prox_scl6cat')) {
		$prox_scl6cat = $_GET['prox_scl6cat'];
		$query .= "`prox_scl6cat` ='" . $prox_scl6cat . "',";
	}
	if (checkIsset('prox_scl6dist')) {
		$prox_scl6dist = $_GET['prox_scl6dist'];
		$query .= "`prox_scl6dist` ='" . $prox_scl6dist . "',";
	}
	if (checkIsset('yearslneRegApplicant')) {
		$yearslneRegApplicant = $_GET['yearslneRegApplicant'];
		$query .= "`yearslneRegApplicant` ='" . $yearslneRegApplicant . "',";
	}
	if (checkIsset('yearsineregSpouse')) {
		$yearsineregSpouse = $_GET['yearsineregSpouse'];
		$query .= "`yearsineregSpouse` ='" . $yearsineregSpouse . "',";
	}
	if (checkIsset('yearsineregGuardian')) {
		$yearsineregGuardian = $_GET['yearsineregGuardian'];
		$query .= "`yearsineregGuardian` ='" . $yearsineregGuardian . "',";
	}
	if (checkIsset('hasDocsOwnership')) {
		$hasDocsOwnership = $_GET['hasDocsOwnership'];
		$query .= "`hasDocsOwnership` ='" . $hasDocsOwnership . "',";
	}
	if (checkIsset('hasDocsOtherProof')) {
		$hasDocsOtherProof = $_GET['hasDocsOtherProof'];
		$query .= "`hasDocsOtherProof` ='" . $hasDocsOtherProof . "',";
	}
	if (checkIsset('prox_nearSclCount')) {
		$prox_nearSclCount = $_GET['prox_nearSclCount'];
		$query .= "`prox_nearSclCount` ='" . $prox_nearSclCount . "',";
	}
	if (checkIsset('alu_classCount')) {
		$alu_classCount = $_GET['alu_classCount'];
		$query .= "`alu_classCount` ='" . $alu_classCount . "',";
	}
	if (checkIsset('alu_eduCount')) {
		$alu_eduCount = $_GET['alu_eduCount'];
		$query .= "`alu_eduCount` ='" . $alu_eduCount . "',";
	}
	if (checkIsset('alu_edu1')) {
		$alu_edu1 = $_GET['alu_edu1'];
		$query .= "`alu_edu1` ='" . $alu_edu1 . "',";
	}
	if (checkIsset('alu_edu2')) {
		$alu_edu2 = $_GET['alu_edu2'];
		$query .= "`alu_edu2` ='" . $alu_edu2 . "',";
	}
	if (checkIsset('alu_edu3')) {
		$alu_edu3 = $_GET['alu_edu3'];
		$query .= "`alu_edu3` ='" . $alu_edu3 . "',";
	}
	if (checkIsset('alu_edu4')) {
		$alu_edu4 = $_GET['alu_edu4'];
		$query .= "`alu_edu4` ='" . $alu_edu4 . "',";
	}
	if (checkIsset('alu_edu5')) {
		$alu_edu5 = $_GET['alu_edu5'];
		$query .= "`alu_edu5` ='" . $alu_edu5 . "',";
	}
	if (checkIsset('alu_coCurCount')) {
		$alu_coCurCount = $_GET['alu_coCurCount'];
		$query .= "`alu_coCurCount` ='" . $alu_coCurCount . "',";
	}
	if (checkIsset('alu_coCur1')) {
		$alu_coCur1 = $_GET['alu_coCur1'];
		$query .= "`alu_coCur1` ='" . $alu_coCur1 . "',";
	}
	if (checkIsset('alu_coCur2')) {
		$alu_coCur2 = $_GET['alu_coCur2'];
		$query .= "`alu_coCur2` ='" . $alu_coCur2 . "',";
	}
	if (checkIsset('alu_coCur3')) {
		$alu_coCur3 = $_GET['alu_coCur3'];
		$query .= "`alu_coCur3` ='" . $alu_coCur3 . "',";
	}
	if (checkIsset('alu_coCur4')) {
		$alu_coCur4 = $_GET['alu_coCur4'];
		$query .= "`alu_coCur4` ='" . $alu_coCur4 . "',";
	}
	if (checkIsset('alu_coCur5')) {
		$alu_coCur5 = $_GET['alu_coCur5'];
		$query .= "`alu_coCur5` ='" . $alu_coCur5 . "',";
	}
	if (checkIsset('alu_sclDevCount')) {
		$alu_sclDevCount = $_GET['alu_sclDevCount'];
		$query .= "`alu_sclDevCount` ='" . $alu_sclDevCount . "',";
	}
	if (checkIsset('alu_sclDev1')) {
		$alu_sclDev1 = $_GET['alu_sclDev1'];
		$query .= "`alu_sclDev1` ='" . $alu_sclDev1 . "',";
	}
	if (checkIsset('alu_sclDev2')) {
		$alu_sclDev2 = $_GET['alu_sclDev2'];
		$query .= "`alu_sclDev2` ='" . $alu_sclDev2 . "',";
	}
	if (checkIsset('alu_sclDev3')) {
		$alu_sclDev3 = $_GET['alu_sclDev3'];
		$query .= "`alu_sclDev3` ='" . $alu_sclDev3 . "',";
	}
	if (checkIsset('alu_sclDev4')) {
		$alu_sclDev4 = $_GET['alu_sclDev4'];
		$query .= "`alu_sclDev4` ='" . $alu_sclDev4 . "',";
	}
	if (checkIsset('sib_count')) {
		$sib_count = $_GET['sib_count'];
		$query .= "`sib_count` ='" . $sib_count . "',";
	}
	if (checkIsset('sib_isFromGrade1')) {
		$sib_isFromGrade1 = $_GET['sib_isFromGrade1'];
		$query .= "`sib_isFromGrade1` ='" . $sib_isFromGrade1 . "',";
	}
	if (checkIsset('sib_yearsSpend')) {
		$sib_yearsSpend = $_GET['sib_yearsSpend'];
		$query .= "`sib_yearsSpend` ='" . $sib_yearsSpend . "',";
	}
	if (checkIsset('sib_awards')) {
		$sib_awards = $_GET['sib_awards'];
		$query .= "`sib_awards` ='" . $sib_awards . "',";
	}
	if (checkIsset('sib_child1name')) {
		$sib_child1name = $_GET['sib_child1name'];
		$query .= "`sib_child1name` ='" . $sib_child1name . "',";
	}
	if (checkIsset('sib_child1no')) {
		$sib_child1no = $_GET['sib_child1no'];
		$query .= "`sib_child1no` ='" . $sib_child1no . "',";
	}
	if (checkIsset('sib_child1grade')) {
		$sib_child1grade = $_GET['sib_child1grade'];
		$query .= "`sib_child1grade` ='" . $sib_child1grade . "',";
	}
	if (checkIsset('sib_child1yearsSpend')) {
		$sib_child1yearsSpend = $_GET['sib_child1yearsSpend'];
		$query .= "`sib_child1yearsSpend` ='" . $sib_child1yearsSpend . "',";
	}
	if (checkIsset('sib_child2name')) {
		$sib_child2name = $_GET['sib_child2name'];
		$query .= "`sib_child2name` ='" . $sib_child2name . "',";
	}
	if (checkIsset('sib_child2no')) {
		$sib_child2no = $_GET['sib_child2no'];
		$query .= "`sib_child2no` ='" . $sib_child2no . "',";
	}
	if (checkIsset('sib_child2grade')) {
		$sib_child2grade = $_GET['sib_child2grade'];
		$query .= "`sib_child2grade` ='" . $sib_child2grade . "',";
	}
	if (checkIsset('sib_child2yearsSpend')) {
		$sib_child2yearsSpend = $_GET['sib_child2yearsSpend'];
		$query .= "`sib_child2yearsSpend` ='" . $sib_child2yearsSpend . "',";
	}
	if (checkIsset('sib_child3name')) {
		$sib_child3name = $_GET['sib_child3name'];
		$query .= "`sib_child3name` ='" . $sib_child3name . "',";
	}
	if (checkIsset('sib_child3no')) {
		$sib_child3no = $_GET['sib_child3no'];
		$query .= "`sib_child3no` ='" . $sib_child3no . "',";
	}
	if (checkIsset('sib_child3grade')) {
		$sib_child3grade = $_GET['sib_child3grade'];
		$query .= "`sib_child3grade` ='" . $sib_child3grade . "',";
	}
	if (checkIsset('sib_child3yearsSpend')) {
		$sib_child3yearsSpend = $_GET['sib_child3yearsSpend'];
		$query .= "`sib_child3yearsSpend` ='" . $sib_child3yearsSpend . "',";
	}
	if (checkIsset('staff_post')) {
		$staff_post = $_GET['staff_post'];
		$query .= "`staff_post` ='" . $staff_post . "',";
	}
	if (checkIsset('staff_serviceYears')) {
		$staff_serviceYears = $_GET['staff_serviceYears'];
		$query .= "`staff_serviceYears` ='" . $staff_serviceYears . "',";
	}
	if (checkIsset('staff_isDisff')) {
		$staff_isDisff = $_GET['staff_isDisff'];
		$query .= "`staff_isDisff` ='" . $staff_isDisff . "',";
	}
	if (checkIsset('staff_serviceYearsDiff')) {
		$staff_serviceYearsDiff = $_GET['staff_serviceYearsDiff'];
		$query .= "`staff_serviceYearsDiff` ='" . $staff_serviceYearsDiff . "',";
	}
	if (checkIsset('staff_serviceYearsNonDIff')) {
		$staff_serviceYearsNonDIff = $_GET['staff_serviceYearsNonDIff'];
		$query .= "`staff_serviceYearsNonDIff` ='" . $staff_serviceYearsNonDIff . "',";
	}
	if (checkIsset('staff_sameScl')) {
		$staff_sameScl = $_GET['staff_sameScl'];
		$query .= "`staff_sameScl` ='" . $staff_sameScl . "',";
	}
	if (checkIsset('staff_isSameSclYears')) {
		$staff_isSameSclYears = $_GET['staff_isSameSclYears'];
		$query .= "`staff_isSameSclYears` ='" . $staff_isSameSclYears . "',";
	}
	if (checkIsset('staff_resDist')) {
		$staff_resDist = $_GET['staff_resDist'];
		$query .= "`staff_resDist` ='" . $staff_resDist . "',";
	}
	if (checkIsset('offc_resDist')) {
		$offc_resDist = $_GET['offc_resDist'];
		$query .= "`offc_resDist` ='" . $offc_resDist . "',";
	}
	if (checkIsset('offc_serviceYears')) {
		$offc_serviceYears = $_GET['offc_serviceYears'];
		$query .= "`offc_serviceYears` ='" . $offc_serviceYears . "',";
	}
	if (checkIsset('foreign_yearsLived')) {
		$foreign_yearsLived = $_GET['foreign_yearsLived'];
		$query .= "`foreign_yearsLived` ='" . $foreign_yearsLived . "',";
	}
	if (checkIsset('foreign_reason')) {
		$foreign_reason = $_GET['foreign_reason'];
		$query .= "`foreign_reason` ='" . $foreign_reason . "',";
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
