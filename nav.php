<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: blue;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
   
  color: white;
  background-color: Blue;
}
.right a{
  float: right;

}
</style>
 
</head>
<body>

<div class="topnav">
  
            <a href="#"><i class="fas fa-home"></i>Home</a>
            <a href="doctorrecords.php"><i class="fas fa-user"></i>Doctor</a>
            <a href="patientrecords.php"><i class="fas fa-user"></i>Patient</a>
            <a href="medicin.php"><i class="fal fa-capsules"></i>Medicin</a>
            <!-- <a href="contact.php"><i class="fas fa-address-book"></i>Contact</a> -->
            <div class="right">
              <a href="welcome.php"><i class="fal fa-capsules"  ></i>Signout</a> 


             <a href="doctor.php"><i class="fal fa-capsules"></i>Add doctor</a>
            <a href="addmedicin.php"><i class="fal fa-capsules"></i>Add medicin</a> 
            <a href="contactrecords.php"><i class="fal fa-capsules"></i>Contacts</a>


          </div>
             
        
</div>

 

</body>
</html>
