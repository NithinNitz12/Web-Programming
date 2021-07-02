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

echo'<!DOCTYPE html>

<head>
	<title>HOTELSss</title>
	<style>
		body
		{
			background-image: url("Images/hotel.jpg");
			background-size:cover;
		}
		h3
		{
			color:#00FF7F;
			font-family:Montserrat;
			font-size:40px;
			text-shadow:2px 2px red;
		}
		h4
		{
			color:#8AC6D0;
			font-family:Montserrat;
			position:relative;
			left:10px;
			top:-40px;
		}
		img
		{
			width:200px;
			height:200px;
			position:relative;
			left:700px;
			top:-50px;
			border-radius:50px;
		}
	</style>
</head>
<body>
	<h3>HOTELSss</h3>
	<h4>The hotel you want to stay!</h4>
	<a href="client.php"><img src="Images/client.jpg"></a>
	<a href="admin-reg.php"><img src="Images/admin.jpg"></a>';
$sql = "SELECT * booking_tbl";
$result = mysqli_query($conn,$query);
echo "<form action='insert.php' method='post'>";
echo "<table border='1' align='center' style='background:white;color:#008888;'>";
echo "<tr><th>Name</th><th>Contact</th><th>Hotel</th><th>Arrival</th><th>AC Rooms</th><th>NON-AC Rooms</th></tr>";
echo "<tr>";
echo "<td><input type='text' name='name'></td>";
echo "<td><input type='text' name='contact'></td>";
echo "<td><input type='text' name='hotel'></td>";
echo "<td><input type='date' name='arrival'></td>";
echo "<td><input type='number' name='rooms_ac' value='0'></td>";
echo "<td><input type='number' name='rooms_nonac' value='0'></td>";
echo "</tr>"; 
echo "</table>";
echo "<input type='submit' value='Insert' style='position:relative;left:900px;'>";
echo "</form>";

echo "<table border='1' align='center' style='background:white;color:#008888;'>";
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["contact"]."</td>";
        echo "<td>".$row["hotel_name"]."</td>";
        echo "<td>".$row["arrival"]."</td>";
        echo "<td>".$row["ac"]."</td>";
        echo "<td>".$row["nonac"]."</td>";
        echo "</tr>";
	}
}
echo"</table>";

?>