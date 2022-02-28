<?php
	include ('connect.php');
		$user=$_POST["username"];
		$pass=$_POST["password"];
		$fname=$_POST["first"];
		$lname=$_POST["last"];
		$name=$fname." ".$lname;

		$sql="insert into user_details values ('$user','$pass','$name',1234567892)";
		mysqli_query($con, $sql);

?>