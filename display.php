<?php
  include("database_connectivity.php");
  $query = "SELECT * FROM STUDENT";
  $data = mysqli_query($conn, $query);
  $total = mysqli_num_rows($data);
  echo $total;
  $result=mysqli_fetch_assoc($data);
  echo $result;
  if($total!=0){
    echo "Table has records";
  }
  else {
    echo "No record found";
  }
 ?>
