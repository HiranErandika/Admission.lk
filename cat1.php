<?php
 ?>

<!--cat1 = close proximity-->

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
  <p>Dear Parent/Guardian,<br> Welcome to our School's Admission Center. <b>Please complete only the sections relevant to the category applied for in the following sections.</b></p> <br>
  <form>
    <div class="form-group">
  <h3> 6.0 Children of residents in close proximity to the school </h3> <br>
      <label for="usr">6.1 Number of years that the applicant was included in the electoral register</label>
      <input type="text" class="form-control" name="nyrsa" id="nyrsa">
    <br>
      <label>6.2 Number of years that the applicant’s spouse was included in the electoral register</label>
      <input type="text" class="form-control" name="nyrss" id="nyrss">
    <br>  
      <label>6.3 Number of years that the legal guardian was included in the   electoral register</label>
      <input type="text" class="form-control" name="nyrsg" id="nyrsg">
      <p>(This is applicable for a period of recent 05 years, prior to the year the application is submitted)</p>
    <br>
    <div class="form-group" class="radio-inline">
       <label>6.4 Document in proof of the ownership <br>
        <input type="radio" name="owradio" id="owradio">Done <br>
        <input type="radio" name="owradio" id="owradio">Undone
       </label>
    </div>

    <br>
    <div class="form-group" class="radio-inline">
       <label>6.5 Additional documents that could be submitted in proof of the residence <br>
        <input type="radio" name="adradio" id="adradio">Done <br>
        <input type="radio" name="adradio" id="adradio">Undone
       </label>
    </div>
      
    <br>
      <label>6.6  Number of schools located closer to the place of residence where the child could be admitted than the school applied by this application</label>
      <input type="text" class="form-control" name="nschc" id="nschc"> 
      <p>(It is compulsory to fill in item 05 by the applicant)</p>
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