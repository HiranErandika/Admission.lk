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
    <p>Dear Parent/Guardian,<br> Welcome to our School's Admission Center. <b>Please complete only the sections relevant to the category applied for in the following sections.</b></p> <br>
    <form>
      <?php
      if (isset($_GET['save'])) {
        echo "Saved";

        
        $nyrsa= $_GET['nyrsa'];
        $nyrss= $_GET['nyrss'];
        $nyrsg= $_GET['nyrsg'];

        $marks = max($nyrsa,$nyrss,$nyrsg)*20;
        //radio ownership doc? 
        $owradio= $_GET['owradio'];

        //other additional doc?
        $adradio= $_GET['adradio'];

        $nsclc= $_GET['nsclc'];

        $marks = $marks - ($nsclc*5);
        if($owradio=="false" && $adradio=="false"){
          echo "No MARKS";
          $marks = 0;
        }else{
          echo "FULL MARKS";
        }



        $url = 'http://localhost/Admission.lk/authentication/api/api.php?update=true&sid=' . urlencode($sid) . "&prox_mark=" . $marks;
        //$url = 'http://localhost/Admission.lk/authentication/api/api.php?update=true&sid=1&update=true&shortname=KVHE&abc=&gfds=';
        echo $url;
        //echo "<br>" . $url . "<br>";
        $resp = file_get_contents("$url");
        header('Location: http://localhost/Admission.lk/authentication/marks.php?sid=' . $_GET['sid']);
      }

      ?>
      <input name="update" value="true" hidden><input name="sid" value="1" hidden><input name="cat" value="1" hidden>

      <div class="form-group">
        <h3> 6.0 Children of residents in close proximity to the school </h3> <br>
        <label for="usr">6.1 Number of years that the applicant was included in the electoral register</label>
        <input type="text" class="form-control" name="nyrsa" id="nyrsa">
        <br>
        <label>6.2 Number of years that the applicant’s spouse was included in the electoral register</label>
        <input type="text" class="form-control" name="nyrss" id="nyrss">
        <br>
        <label>6.3 Number of years that the legal guardian was included in the electoral register</label>
        <input type="text" class="form-control" name="nyrsg" id="nyrsg">
        <p>(This is applicable for a period of recent 05 years, prior to the year the application is submitted)</p>
        <br>
        <div class="form-group" class="radio-inline">
          <label>6.4 Document in proof of the ownership <br>
            <input type="radio" name="owradio" value="true" id="owradio">Done <br>
            <input type="radio" name="owradio" value="false" id="owradio">Undone
          </label>
        </div>

        <br>
        <div class="form-group" class="radio-inline">
          <label>6.5 Additional documents that could be submitted in proof of the residence <br>
            <input type="radio" name="adradio" value="true" id="adradio">Done <br>
            <input type="radio" name="adradio" value="false" id="adradio">Undone
          </label>
        </div>

        <br>
        <label>6.6 Number of schools located closer to the place of residence where the child could be admitted than the school applied by this application</label>
        <input type="text" class="form-control" name="nschc" id="nschc">
        <p>(It is compulsory to fill in item 05 by the applicant)</p>
        <br>

        <label>Declaration</label>
        <p>I hereby declare that my child is not attending any government school; government approved private school or any other school at present for his/ her studies. I also declare that the details furnished above are true and correct and I agree further to submit satisfactory evidence relating to my permanent residence and other information indicated here. I am also aware that my application will be rejected if any information furnished by me is found to be false/ forged. If it is revealed after the admission of my child that the information furnished is false/ forged I agree to remove my child from the school and admit him/her to another school in the area nominated by the Department of Education.</p>
        <input type="checkbox" name="agree" value="agree"> I Agree to Terms and Conditions.
        <br>

        <div class="form-group col-sm-11"></div>
        <div class="form-group col-sm-1">
        <button type="submit" value="save" name="save" class="btn btn-success">Save</button> </a>
       </div>






      </div>


    </form>


  </div>

</body>

</html>