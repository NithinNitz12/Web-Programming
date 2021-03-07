<?php
 define('DB_SERVER', 'localhost:3306');
 define('DB_USERNAME', 'root');
 //Establishing connection with the database
 define('DB_PASSWORD', '');
 define('DB_DATABASE', 'NEWPROFILE'); //where profile is the database 
 $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
