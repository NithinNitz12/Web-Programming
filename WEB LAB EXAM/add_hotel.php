<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";

$conn = mysqli_connect($servername, $username, $password,$dbname);
if (!$conn) 
{
  die("Connection failed: " . mysqli_connect_error());
}

$name = $_POST['name'];
$location = $_POST['location'];
$ac = $_POST['ac'];
$nonac = $_POST['nonac'];
$ac_nos = $_POST['ac_nos'];
$nonac_nos = $_POST['nonac_nos'];

                                                                                                                                                                                     

$query = "INSERT INTO hotel_tbl(name,place,ac_price,nonac_price,ac,nonac) VALUES ('".$name."','".$location."',".$ac.",".$nonac.",".$ac_nos.",".$nonac_nos.")";

$result = mysqli_query($con,$query);

if($result)
{
    echo "<script>alert('Hotel Registered')</script>";
}
else
{
    echo "<script>alert('Error')</script>";
}


echo "<a href='hotel.php'>Go Back to Lising Page</a>";

?>