<?php
 ?>

<!--cat4 = Institution Staff-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
  <h4> 9.0  Children of persons belonging to the staff in an institution directly involved in school education. </h4>
      <label for="usr">9.1  Post held as a permanent employee in the relevant  institutions</label>
      <input type="text" class="form-control" id="usr">
    <br>
      <label>Period of service</label>
      <input type="text" class="form-control" id="usr">
    <br>  
      <label>9.2 Distance from the place of residence to the place of work</label>
      <input type="text" class="form-control" id="usr">
    <br>
      <label>9.3  If serving presently in a difficult school</label>
      <input type="text" class="form-control" id="usr">
    <br>
      <label>Period of difficult school service</label>
      <input type="text" class="form-control" id="usr">
    <br>
      <label>9.4  Name of the school if serving in a school</label>
      <input type="text" class="form-control" id="usr">
    <br>
      <label>Period of service</label>
      <input type="text" class="form-control" id="usr">  
    <br>
      <label>9.5  Distance from permanent place of residence to the school applied</label>
      <input type="text" class="form-control" id="usr">   
    <br>
    <br>  
    <div class="form-group" class="radio-inline">
       <label>9.6 Document relevant to the place of residence</label>
    <label>   
      <input type="radio" name="optradio" >Yes
      <input type="radio" name="optradio">No
    </label>
    </div> 
    <br>
     <label>9.7 Distance from permanent place of residence to the place of work </label>
      <input type="text" class="form-control" id="usr">   
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