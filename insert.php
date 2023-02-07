<!DOCTYPE html>
<?php
  error_reporting(0)."<br>";
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="" method="GET">
        Roll No <input type="text" name="rollno" value=""><br><br>
        Name <input type="text" name="Name" value=""><br><br>
        Class <input type="text" name="Class" value=""><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        include("database_connectivity.php");
        if($_GET['submit'])
        {
          $rn=$_GET['rollno'];
          $sn=$_GET['Name'];
          $cl=$_GET['Class'];
          if($rn!="" && $sn!="" && $cl!="")
          {
              $query="INSERT INTO STUDENT VALUES('$rn','$sn','$c')";
              $data=mysqli_query($conn,$query);

              if($data){
              echo "Data inserted succesfully";
              }
          }
          else
          {
            echo "All fields are required";
          }
        }

     ?>
  </body>
</html>
