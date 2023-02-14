!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="da.php" method="POST">
        <table align="center" bgcolor="powderblue">
            <tr>
                <td>username:</td>
            </tr>
            <tr>
                <td><input type="text" name="username" placeholder="name"/></td>
            </tr>
            <tr>
                <td>number:</td></br>
            </tr>
            <tr>
                <td><input type="number" name="num" placeholder="phonenumber"/></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="save"></td>
                <td><input type="submit" name="display" value="display"></td>
            </tr>

        </table>
    </form>
</body>
</html>
<?php
$name=$_POST["username"];
$num=$_POST["num"];
$Db_name="regis";
$ser_name="localhost";
$ser_username="root";
$ser_pass="";
$conn = mysqli_connect($ser_name, $ser_username, $ser_pass,"mywebsite");
if(! $conn )
{
  die('Could not connect: ' . mysqli_connect_error());
}
if(isset($_POST['submit']))
{
$insert_query = "INSERT INTO regis(uname,contact)VALUES('$name','$num')";
if(mysqli_query($conn,$insert_query))
{
    echo "resgisterd successfully";
    header("refresh:2,url=database.html");

}
}
if(isset($_POST['display']))
{
}
?>
