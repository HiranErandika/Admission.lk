<?php
 ?>


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
  <p>Dear Parent/Guardian,<br> Welcome to our School's Admission Center.Please use this form to apply for your child's Admission to your school.We need complete and accurate information about the student.So make sure you will fill out all fields. School Admission Forms are processed within 48 hours. You will receive an email confiramation when we process your application. </p>
  <form>
    <div class="form-group">
  <h4> 01.Details of the child </h4>
      <label for="usr">1.1 Name in full</label>
      <input type="text" name="nif" class="form-control" id="nif">
    </div>
    <div class="form-group">
      <label>1.2 Name with initials</label>
      <input type="text" name="nwi" class="form-control" id="nwi">
    </div>
    <div class="form-group">
      <label>1.3 Religion</label>
      <input type="text" name="rel" class="form-control" id="rel">
    </div>
   
    <div class="form-group" class="radio-inline">
       <label>1.4 Medium of learning
      <input type="radio" name="molradio" id="molradio" >Sinhala
      <input type="radio" name="molradio" id="molradio">English
      <input type="radio" name="molradio" id="molradio">Tamil
    </label>
    </div>

    <div class="form-group">
      <label>1.5 Date of birth</label>
     </div>
     <div class="col-sm-4"> 
       
      <select name="dob" id="dob" class="form-control input-sm">
        <option value="0">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select>
    </div>

    <div class="form-group col-sm-4">
     
      <select name="mob" id="mob" class="form-control input-sm">
        <option value="0">Month</option>
        <option value="1">Jan</option>
        <option value="2">Feb</option>
        <option value="3">Mar</option>
        <option value="4">Apr</option>
        <option value="5">May</option>
        <option value="6">Jun</option>
        <option value="7">Jul</option>
        <option value="8">Aug</option>
        <option value="9">Sep</option>
        <option value="10">Oct</option>
        <option value="11">Nov</option>
        <option value="12">Dec</option>
      </select>
    </div>
    
    <div class="form-group col-sm-4">
  
      <select name="yob" id="yob" class="form-control input-sm"><option value="0">Year</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option><option value="1904">1904</option><option value="1903">1903</option><option value="1902">1902</option><option value="1901">1901</option><option value="1900">1900</option><option value="1899">1899</option></select>

    </div>

    <div class="form-group">
      <label>1.6 Age on 31st January 2018</label>
     </div>
     <div class="form-group col-sm-4">
  
      <select name="ysob" id="ysob" class="form-control input-sm"> 
      <option value="0">Years</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option>
    </select>
      </div>

    
    <div class="form-group col-sm-4">
     
      <select name="msob" id="msob" class="form-control input-sm">
        <option value="0">Months</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option>
        </select>
    </div>
    

    <div class="col-sm-4"> 
       
      <select name="dsob" id="dsob" class="form-control input-sm">
        <option value="0">Days</option><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option></select>
    </div>

  <div class="form-group col-sm-12">
  <h4>2.0 Details of the applicant(Mother/Father/Legal Guardian)</h4>
    <div class="form-group">
      <label for="pnif">2.1 Name in full</label>
      <input type="text" name="pnif" class="form-control" id="pnif">
     </div>
    <div class="form-group">
      <label>2.2 Name with initials</label>
      <input type="text" name="pnwi" class="form-control" id="pnwi">
    </div>
    <div class="form-group">
      <label>2.3 National Identtity Card Number</label>
      <input type="text" name="nic" class="form-control" id="nic">
    </div>
     <div class="form-group" class="radio-inline">
       <label>2.4 Whether applicant is a Sri Lankan</label> 
      <input type="radio" name="slradio" id="slradio" >Yes
      <input type="radio" name="slradio" id="slradio">No
    </label>
    </div>
    <div class="form-group">
      <label>2.5 Religion</label>
      <input type="text" name="prel" class="form-control" id="prel">
    </div>
    <div class="form-group">
      <label>2.6 Permanant Address</label>
      <input type="text" name="padd" class="form-control" id="padd">
    </div>
    <div class="form-group">
      <label>2.7 Telephone Number</label>
      <input type="text" name="tpnum" class="form-control" id="tpnum">
    </div>
    <div class="form-group">
      <label>2.8 Name of residential district</label>
      <input type="text" name="resd" class="form-control" id="resd">
    </div>
    <div class="form-group">
      <label>2.9 Divisional Secretary area of the place of residence</label>
      <input type="text" name="resa" class="form-control" id="resa">
    </div>
    <div class="form-group">
      <div class="col-sm-11"><label>2.10 Grama Niladhari Division of the place of residence</label></div>
      <div class="col-sm-1"><label>No</label></div>
      <div class="col-sm-11"><input type="text" name="resg" class="form-control" id="resg"></div>
      <div class="col-sm-1"><input type="text" name="resgn" class="form-control" id="resgn"></div>
    </div>

<div class="form-group col-sm-12">
  <h4>3.0 Schools applied for (Should be written according to the order of preference, including the school mentioned above)</h4>
    </div>
  <div class="form-group">

<table border="0" width="100%">
  <tr>
    <th>Serial No</th>
    <th>Name of school</th>
    <th>category of school (National/Provincial)</th>
    <th>Distance to the school from the place of residence (k.m)</th>
    <th></th>
  </tr>
    <tr>
    <td>1</td>
    <td><input class="form-control" type="text" name="nos1" id="nos1" style="width:90%"></td>
    <td><input class="form-control" type="text" name="cos1" id="cos1" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dts1" id="dts1" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>2</td>
    <td><input class="form-control" type="text" name="nos2" id="nos2" style="width:90%"></td>
    <td><input class="form-control" type="text" name="cos2" id="cos2" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dts2" id="dts2" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>3</td>
    <td><input class="form-control" type="text" name="nos3" id="nos3" style="width:90%"></td>
    <td><input class="form-control" type="text" name="cos3" id="cos3" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dts3" id="dts3" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>4</td>
    <td><input class="form-control" type="text" name="nos4" id="nos4" style="width:90%"></td>
    <td><input class="form-control" type="text" name="cos4" id="cos4" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dts4" id="dts4" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>5</td>
    <td><input class="form-control" type="text" name="nos5" id="nos5" style="width:90%"></td>
    <td><input class="form-control" type="text" name="cos5" id="cos5" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dts5" id="dts5" style="width:90%"></td>
    <td><br><br></td>
  </tr>
    <tr>
    <td>6</td>
    <td><input class="form-control" type="text" name="nos6" id="nos6" style="width:90%"></td>
    <td><input class="form-control" type="text" name="cos6" id="cos6" style="width:90%"></td>
    <td><input class="form-control" type="text" name="dts6" id="dts6" style="width:90%"></td>
    <td><br><br></td>
  </tr>

  </table>
(When your child is selected for several schools applied for, the school you have given the highest
preference will be allocated considering the above priority order and the name will be deleted from the lists
of other schools.)
</div>

 <div class="form-group col-sm-11"></div>
  <div class="form-group col-sm-1">
  <a href = "http://localhost/Admission.lk/authentication/fixedcatpage2.php">
  <button type="submit" form="nameform" value="Next" class="btn btn-success">Next</button> </a>
  </div>
  </div>
  


  </form>
  
</div>

</body>
</html>
