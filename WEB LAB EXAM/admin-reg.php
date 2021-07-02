<!DOCTYPE html>
<html>
<head>
	<title>HOTELSss</title>
	<style>
		body
		{
			background-image: url('Images/hotel.jpg');
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
		table
		{
			font-size
		}
	</style>

</head>
<body>
	<h3>HOTELSss</h3>
	<h4>The hotel you want to stay!</h4>
	<a href="client.php"><img src="Images/client.jpg"></a>
	<a href="admin-reg.php"><img src="Images/admin.jpg"></a>
</body>
</html>

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
echo "<form action='add_hotel.php' method='post'>";
echo "<table border='1' align='center' style='background:white;color:#008888;'>";
echo "<tr><th>Name</th><th>Location</th><th>AC Room (Rate)</th><th>Non AC Room (Rate)</th><th>AC Rooms (Nos)</th><th>NON-AC Rooms (Nos)</th></tr>";
echo "<tr>";
echo "<td><input type='text' name='name'></td>";
echo "<td><input type='text' name='location'></td>";
echo "<td><input type='number' name='ac' value='0'></td>";
echo "<td><input type='number' name='nonac'  value='0'></td>";
echo "<td><input type='number' name='ac_nos' value='0'></td>";
echo "<td><input type='number' name='nonac_nos' value='0'></td>";
echo "</tr>"; 
echo "</table>";
echo "<input type='submit' value='Insert' style='position:relative;left:900px;'>";
echo "</form>"; 

$query = "SELECT * FROM hotel_tbl";
$result = mysqli_query($conn,$query);
echo "<table border='1' align='center' style='background:white;color:#008888;'>";
if(mysqli_num_rows($result)>0)
{
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["place"]."</td>";
        echo "<td>".$row["ac_price"]."</td>";
        echo "<td>".$row["nonac_price"]."</td>";
        echo "<td>".$row["ac"]."</td>";
        echo "<td>".$row["nonac"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<br><br>To book a hotel,<a href='index.php'>Click Here</a>";
}
?>