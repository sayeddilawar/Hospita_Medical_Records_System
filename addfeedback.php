<?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "hospital");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $Username =  $_REQUEST['Username'];
        $lastname = $_REQUEST['lastname'];
        $emailaddress = $_REQUEST['emailaddress'];
        $date =  $_REQUEST['date'];
    
        $city = $_REQUEST['city'];
         $feedback = $_REQUEST['feedback'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO contact  VALUES ('$Username', 
            '$lastname','$emailaddress','$date','$city','$feedback')";
          
        if(mysqli_query($conn, $sql)){
             
                header('Location: welcome.php');

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>