<?php 
	$students = array("Tony", "Peter", "Bruce", "Steve", "Wade", "Natasha", "Gwen");
	echo "Normal Array : <br>";
	print_r($students);
	echo "<br><br> Ascending Sort : <br>";
	asort($students);
	print_r($students);
	echo "<br><br> Descending Sort : <br>";
	arsort($students);
	print_r($students);
?>