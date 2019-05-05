<?php
 ?>

<!--cat3 = siblings/brothers-sisters-->

<!DOCTYPE html>
<html lang="en">
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
  <p>Dear Parent/Guardian,<br> Welcome to our School's Admission Center.<b>Please complete only the sections relevant to the category applied for in the following sections.</b></p>
  <form>
    <div class="form-group">
  <h3> 8.0 Brothers / sisters of students studying in the school at present:</h3> 
      <label for="usr">8.1  If a child/children of applicant is/are studying in the school</label> 
  <br>

  <div class="form-group">
<table border="0" width="100%">
  <tr>
    <th>Serial No</th>
    <th>Name of child</th>
    <th>Admission Number</th>
    <th>Admission Grade to this school and Grades spent </th>
    <th></th>
  </tr>
    <tr>
    <td>1</td>
    <td><input class="form-control" type="text" name="noc1" id="noc1" style="width:90%"></td>
    <td><input class="form-control" type="text" name="gan1" id="gan1" style="width:90%"></td>
    <td><input class="form-control" type="text" name="ags1" id="ags1" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>2</td>
    <td><input class="form-control" type="text" name="noc2" id="noc2" style="width:90%"></td>
    <td><input class="form-control" type="text" name="gan2" id="gan2" style="width:90%"></td>
    <td><input class="form-control" type="text" name="ags2" id="ags2" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>3</td>
    <td><input class="form-control" type="text" name="noc3" id="noc3" style="width:90%"></td>
    <td><input class="form-control" type="text" name="gan3" id="gan3" style="width:90%"></td>
    <td><input class="form-control" type="text" name="ags3" id="ags3" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>4</td>
    <td><input class="form-control" type="text" name="noc4" id="noc4" style="width:90%"></td>
    <td><input class="form-control" type="text" name="gan4" id="gan4" style="width:90%"></td>
    <td><input class="form-control" type="text" name="ags4" id="ags4" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>5</td>
    <td><input class="form-control" type="text" name="noc5" id="noc5" style="width:90%"></td>
    <td><input class="form-control" type="text" name="gan5" id="gan5" style="width:90%"></td>
    <td><input class="form-control" type="text" name="ags5" id="ags5" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>6</td>
    <td><input class="form-control" type="text" name="noc6" id="noc6" style="width:90%"></td>
    <td><input class="form-control" type="text" name="gan6" id="gan6" style="width:90%"></td>
    <td><input class="form-control" type="text" name="ags6" id="ags6" style="width:90%"></td>
    <td><br><br></td>
  </tr>

  </table>
</div>  

    <br>
     <label for="usr">8.2 Number of years that the applicant was included in the electoral register</label>
      <input type="text" class="form-control" name="nyre" id="nyrea">
    <br>
      <label> Number of years that the applicant’s spouse was included in the electoral register</label>
      <input type="text" class="form-control" name="nyres" id="nyres">
    <br>  
      <label> Number of years that the legal guardian was included in the   electoral register</label>
      <input type="text" class="form-control" name="nyreg" id="nyreg">
      <p>(This is applicable for a period of recent 05 years, prior to the year the application is submitted)</p>
    <br>
      <label>8.3  Number of other schools where the child could be admitted and located closer to the place of residence other than the school applied for</label>
      <input type="text" class="form-control" name="nschc" id="nschc">
    <br> 
    <div class="form-group" class="radio-inline">
       <label>8.4  Ownership of the place of residence (Title deed - in the name of applicant /spouse or applicant’s / spouse’s parents / registered Lease Bond / Government Official Quarters Documents / un-registered Lease Bond/ Any other Legal document to prove ownership</label>
    <label>   
      <input type="radio" name="ownradio" id="ownradio" >Yes
      <input type="radio" name="ownradio" id="ownradio" >No
    </label>
    </div> 

    <div class="form-group" class="radio-inline">
       <label>8.5  Achievements gained for the school by brothers / sisters in the School and various types of assistance provided by the applicant for the development of the school</label>
    <label>
      <input type="radio" name="achradio" id="achradio" > Yes
      <input type="radio" name="achradio" id="achradio" > No
    </label>
    </div> 
    <br>
    <label>Declaration</label>
    <p>I hereby declare that my child is not attending any government school; government approved private school or any other school at present for his/ her studies. I also declare that the details furnished above are true and correct and I agree further to submit satisfactory evidence relating to my permanent residence and other information indicated here. I am also aware that my application will be rejected if any information furnished by me is found to be false/ forged. If it is revealed after the admission of my child that the information furnished is false/ forged I agree to remove my child from the school and admit him/her to another school in the area nominated by the Department of Education.</p>
    <input type="checkbox" name="agree" value="agree"> I Agree to Terms and Conditions.
    <br>

    <div class="form-group col-sm-11"></div>
    <div class="form-group col-sm-1">
    <button type="submit" form="nameform" value="Submit" class="btn btn-success">Submit</button>
    </div>  



      
    </div>




  </form>  
</div>  

</body>
</html>