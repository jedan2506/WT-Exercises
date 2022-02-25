<?php

    session_start();
    
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
	include('connect.php');
		$uname=$_POST['username'];
		$passw=$_POST['password'];
		$sql="select * from users where username= '$uname'AND password='$passw'";

		$result = mysqli_query($con, $sql);  
		if(mysqli_num_rows($result)>0)
		{
			$row=mysqli_fetch_object($result);

			if(password_verify($passw,$row->password))
			{

			}
			else
			{
				$_SERVER["error"]="Password does not match";
			}
		} 
    }
    else
    {
    	$_SERVER["error"]="Username does not found";
    }
?>


