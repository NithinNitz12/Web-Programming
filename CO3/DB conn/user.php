<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "NEWPROFILE";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $name = $_POST['login'];
    
    $sql = "SELECT * FROM regform where USERNAME='".$name."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      echo "<table border='1'>";
      echo "<tr><td>ID</td><td>Full Name</td><td>Email</td><td>Username</td></tr>";
      while($row = $result->fetch_assoc()) 
      {
        echo "<tr><td>" . $row["ID"]."</td><td>" . $row["FULLNAME"]. "</td> <td>" . $row["EMAIL"]. "</td><td>".$row["USERNAME"]. "</td></tr>";
      }
      echo "</table>";
    } else {
      echo "0 results";
    }
    $conn->close();
?>