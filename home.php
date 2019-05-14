<?php
session_start();
include('api/db.php');
if (isset($_SESSION['message'])) {
  echo "<div id ='error_msg'>" . $_SESSION['message'] . "</div>";
  unset($_SESSION['message']);
}
$result = mysqli_query($con, "SELECT max(sid) as MAX FROM `student`");
$maxSid = 1;
if (mysqli_num_rows($result) > 0) {
  $row = mysqli_fetch_array($result);
  $maxSid = $row['MAX'];
}
?>
<!DOCTYPE html>
<html>
<?php include('header.php');?>

  <!-- Applicant Category-->
  <div class="container-fluid">
    <h1>Applicant Category</h1>
    <br>
    <p align="center">Please Select under which category do you wish to apply your child.</p>
    <br>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <center> <a href="http://localhost/Admission.lk/authentication/fixedcat.php?cat=1&sid=<?php echo $maxSid; ?>"><img src="IMG_1.jpg" style="width:40%; height:50"></a> </center>
      </div>
      <div class="col-sm-4">
        <center> <a href="http://localhost/Admission.lk/authentication/fixedcat.php?cat=2"><img src="IMG_2.jpg" style="width:40%; height:50"></a> </center>
      </div>
      <div class="col-sm-4">
        <center> <a href="http://localhost/Admission.lk/authentication/fixedcat.php?cat=3"><img src="IMG_3.jpg" style="width:40%; height:50"></a> </center>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-sm-4">
        <center> <a href="http://localhost/Admission.lk/authentication/fixedcat.php?cat=4"><img src="IMG_4.jpg" style="width:40%; height:50"></a> </center>
      </div>
      <div class="col-sm-4">
        <center> <a href="http://localhost/Admission.lk/authentication/fixedcat.php?cat=5"><img src="IMG_5.jpg" style="width:40%; height:50"></a> </center>
      </div>
      <div class="col-sm-4">
        <center> <a href="http://localhost/Admission.lk/authentication/fixedcat.php?cat=6"><img src="IMG_6.jpg" style="width:40%; height:50"></a> </center>
      </div>
    </div>
  </div>


  <!--Sticky Footer-->

</body>

</html>