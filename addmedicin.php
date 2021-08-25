<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form
{
  width: 50%;
  margin-left: 350px;
}
 

.container
{
   
  border:3px solid #f1f1f1 ;

}

input[type=text], input[type=password],input[type=number],input[type=date] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  border-radius: 25px;
}

button {
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
 
  border-radius: 25px;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

.container {
  padding: 16px;

}
 
span.psw {
  margin-left:100px;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
     border-radius: 25px;

  }
 
      
}
</style>
 
 
</head>
<body style="background-color:#4edcbf45;">

<h2 align="center" style="background-color:#263aed;padding: 25px;color:white">Add Medicine</h2>

<form name="myform" action="insertmedicin.php" method="post" onsubmit="return validateform()">
  
 
  <div class="container">
    <label for="medicin_name"><b>Medicin Name</b></label><br>
    <input type="text" placeholder="Enter Medicin Name" name="medicin_name" required="Cannot be empty">
    <br>
    <label for="medicin_manufactur  "><b>Medicine Manufacture</b></label><br>
    <input type="text" placeholder="Enter medicine manufacture" name="medicin_manufactur" required="Cannot be empty">
    <br>

    <label for="  exp_date"><b>Medicine expiry date</b></label><br>
    <input type="date" placeholder="Enter Medicine expiry date" name="exp_date" required="Cannot be empty">
     
    <button type="submit">Submit</button>
    <br>
    <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="reset" class="cancelbtn">Reset</button>
    
  </div>

</form>

  </div>

</body>

</html>

<?php

include 'footer.php';
?>
