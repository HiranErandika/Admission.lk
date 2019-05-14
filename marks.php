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

<?php include('header.php');?>

<body>

  <div class="container">
    <h2>Admission Form</h2>
    <p>Dear Parent/Guardian,<br> Welcome to our School's Admission Center.<b>Your results as follows.</b></p>
    <form>
      <div class="form-group">
        <h4> Results </h4>
        <table class="table">
          <tbody>
            <tr class="table-primary">
              <td>Proximity Marks</td>
              <td><?php echo  $jsonData['prox_mark']; ?></td>
            </tr>
            <tr class="table-primary">
              <td>Alumnai Marks</td>
              <td><?php echo  $jsonData['alum_mark']; ?></td>

            </tr>
            <tr class="table-primary">
              <td>Siblings Marks</td>
              <td><?php echo  $jsonData['sib_mark']; ?></td>

            </tr>
            <tr class="table-primary">
              <td>Staff Marks</td>
              <td><?php echo  $jsonData['staff_mark']; ?></td>

            </tr>
            <tr class="table-primary">
              <td>Officer Marks</td>
              <td><?php echo  $jsonData['officer_mark']; ?></td>

            </tr>
            <tr class="table-primary">
              <td>Foreign Marks</td>
              <td><?php echo  $jsonData['foreign_mark']; ?></td>

            </tr>
            <tr>
              <td>SID</td>
              <td><?php echo  $jsonData['sid']; ?></td>

            </tr>
            <tr>
              <td>Full Name</td>
              <td><?php echo  $jsonData['fullname']; ?></td>

            </tr>
            <tr>
              <td>Short Name</td>
              <td><?php echo  $jsonData['shortname']; ?></td>

            </tr>
            <tr>
              <td>Religion</td>
              <td><?php echo  $jsonData['religion']; ?></td>

            </tr>
            <tr>
              <td>Nationality</td>
              <td><?php echo  $jsonData['locale']; ?></td>

            </tr>
            <tr>
              <td>Date of Birth</td>
              <td><?php echo  $jsonData['dob']; ?></td>

            </tr>
            <tr>
              <td>Sex</td>
              <td><?php echo  $jsonData['sex']; ?></td>

            </tr>
          </tbody>
        </table>

        <div class="form-group col-sm-11"></div>
        <div class="form-group col-sm-1">
          <button type="submit" form="nameform" value="Submit" class="btn btn-success">Submit</button>
        </div>





      </div>




    </form>
  </div>

</body>

</html>