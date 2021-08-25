

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
              <th>medicin_name</th>
              <th>medicin_manufactur</th>
              <th>exp_date</th>
               

            </tr>
          </thead>
          <tbody>

            <?php

include 'db_connect.php';

$selectquery = "select * from medicin";
$query = mysqli_query($conn,$selectquery);

$nums = mysqli_num_rows($query);


//echo $nums;

//$res = mysqli_fetch_array($query);

//echo $res[1];

while ($res = mysqli_fetch_array($query)) {
   
  ?>

   <tr>
              <td><?php echo $res['medicin_name']; ?></td>
              <td><?php echo $res['medicin_manufactur']; ?></td>
              <td><?php echo $res['exp_date']; ?></td>
              
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

