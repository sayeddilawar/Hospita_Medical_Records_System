
     
        <?php
  
         
        $conn = mysqli_connect("localhost", "root", "", "hospital");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
         
        $medicin_name =  $_REQUEST['medicin_name'];
        $medicin_manufactur = $_REQUEST['medicin_manufactur'];
        $exp_date = $_REQUEST['exp_date'];
        
        
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO medicin  VALUES ('$medicin_name', 
            '$medicin_manufactur','$exp_date')";
          
        if(mysqli_query($conn, $sql)){
             
                header('Location: medicin.php');

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    
 