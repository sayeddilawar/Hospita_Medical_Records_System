 
 
	 

 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hospital";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn) {
	echo " Connection successfully";

 
 


 
  }
 else {
  die("No connection" . mysql_connect_error());
} 

$conn->close();
?>
 