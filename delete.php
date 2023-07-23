<?php
	$con=mysqli_connect("localhost","root","","project");
	$id=$_GET['id'];
	echo $id;
	$query="delete from users where id=$id";
	$result=mysqli_query($con,$query);
	if($result==true)
	{
		echo "<p style='border:1px solid green;'>data is successfully deleted</p>";
		//header("Location:fetch_data.php");
	}
	else
	{
		echo "<p style='border:1px solid red;'>failed</p>";
	}
	?>