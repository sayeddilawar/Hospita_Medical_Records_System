

  <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>

  <?php include 'link.php'; ?>
  <?php include 'style.css'; ?>
  <?php include 'nav.php'; ?>


</head>
<body>
  <div class="main-div">
 


    <div class="center-div">
      <div class="table-responsive">

        <table>
          <thead>
            <tr>
              <th>Username</th>
              <th>lastname</th>
              <th>emailaddress</th>
              <th>date</th>
               
              <th>city</th>
              <th>feedback</th>

            </tr>
          </thead>
          <tbody>

            <?php

include 'db_connect.php';

$selectquery = "select * from contact";
$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);


//echo $nums;

//$res = mysqli_fetch_array($query);

//echo $res[1];

while ($res = mysqli_fetch_array($query)) {
   
  ?>

   <tr>
              <td><?php echo $res['Username']; ?></td>
              <td><?php echo $res['lastname']; ?></td>
              <td><?php echo $res['emailaddress']; ?></td>
              <td><?php echo $res['date']; ?></td>
              <td><?php echo $res['city']; ?></td>
              <td><?php echo $res['feedback']; ?></td>
             
            </tr>
<?php  
}

?>
            
          </tbody>
        </table>
      </div>


      </div>

  </div>

</body>
</html>
<?php

include 'footer.php';
?>

