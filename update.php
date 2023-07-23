<?php
	$id=$_POST['id'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$stop=$_POST['stop'];
	$mob=$_POST['mob'];

	$con=mysqli_connect("localhost","root","","project");	
	$up_query="update users set username='$usename',email='$email', stop='$stop', mob='$mob' where id=$id";
	$result=mysqli_query($con,$up_query);
	if($result==true)
	{
		echo "<p style='border:1px solid green;'>data is successfully updated</p>";
		//header("Location:fetch_data.php");
	}
	else
	{
		echo "<p style='border:1px solid red;'>failed</p>";
	}
	?>