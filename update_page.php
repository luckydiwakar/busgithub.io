
<?php
	$con=mysqli_connect("localhost","root","","project");
	$id=$_GET['id'];
	echo $id;
	$query="SELECT from users where id=$id";
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


<!DOCTYPE html>
<html>
<head>
<title>add madicien</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
.form-control{
border:none;
}
.box1 a:hover{
color:red;
}
</style>
<body>
<legend>
<div class="container w-50 p-4 mt-5" style="background-color:rgb(243, 245, 247) !important;">
<div class="" >
    <legend><h1 class="text-center text-success"> Create Account </h1></legend>
    <h6 class="text-center text-success"> it's free and hardly takes more than 30 seconds </h6>

	
<form method="post" action="update.php">
			<div class="input-group mt-5 mb-3">
				<div class="input-group-prepend form-group">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-user-circle p-1" aria-hidden="true"></i></span>
				</div>
				<input type="text" class="form-control" placeholder=" Enter Usename"  name="username" value="<?php echo $row[1]; ?>"  required>
			</div>
			<div class="input-group mb-3">
				<div class="input-group-prepend form-group">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-envelope p-1" aria-hidden="true"></i></span>
				</div>
				<input type="email" class="form-control" placeholder=" Enter email" <input class="form-control"value="<?php echo $row[2];?>">
			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend form-group">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-map-marker p-1 text-red" aria-hidden="true"    ></i></span>
				</div>
				<input type="text" class="form-control" placeholder=" Enter stop" name="stop"  value="<?php echo $row[4];?>">
			</div>

			<div class="input-group mb-3">
				<div class="input-group-prepend form-group">
					<span class="input-group-text text-light bg-dark"><i class="fa fa-mobile p-1" aria-hidden="true"></i></span>
				</div>
				<input type="number" class="form-control" placeholder=" Enter mob" name="mob"  value="<?php echo $row[5];?>">
			</div>
				<div class="button w-100 pb-5 pt-4" style="display:flex; ">
					<button type="Submit" class="btn btn-success ml-1 w-50 bg-dark"  name="reg_user">login</button>
					<button type="reset" class="btn btn-success ml-1 w-50 bg-dark" >Reset Form</button>
				</div>	
				<p>
  		<!-- Already a member? <a href="login.php">Sign in</a> -->
  	</p>
		</form>
    
</div>	
</div>
</body>
</html>
