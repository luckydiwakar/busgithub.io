<?php
$month=$_POST['month'];
$pay=$_POST['pay'];
$due=$_POST['due'];
$date=$_POST['date'];
$conn=mysqli_connect("localhost","root","","project");
$query="insert into data VALUES(DEFAULT,'$month','$pay','$due','$date');";
$result=mysqli_query($conn,$query);
if($result==true){
	echo "<p style='border:1px solid green;'>data is successfully insert</p>";
	//header("Location:Medicine.php");
}
else
{
	echo "<p style='border:1px solid red;'>lucky</p>";
}

?>