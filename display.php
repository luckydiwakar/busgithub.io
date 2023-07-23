
<!DOCTYPE html>
<head>
  <title>Data Display</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="col-lg-12  m-auto ">
	<br></br>
		<h1 class="text-center p-4	"> display data</h1>
		<table class="table table-hover table-bordered text-center ">
			<tr class="bg-dark text-white  table-bordered">
				<th>id</th>
				<th>username</th>
				<th>Gmail</th>
				<th>Stop</th>
				<th>mobile</th>
				<th>password</th>
				<th>mobile</th>
				<th>update</th>
				<th>delete</th>				
			</tr>
			<?php
	$con=mysqli_connect("localhost","root","","project");
	$query="SELECT * FROM `users`;";
	$result=mysqli_query($con,$query);
	$num=mysqli_num_rows($result);
	if($num>0)
	{
		$i=1;
		while($row=mysqli_fetch_row($result))
		{
?>		<tr class="table-bordered ">
				<td><?php echo $i++; ?></td>
				<td hidden><?php echo $row[0]; ?></td>
				<td><?php echo $row[1]; ?></td>
				<td><?php echo $row[2]; ?></td>		
				<td><?php echo $row[3]; ?></td>
				<td><?php echo $row[4]; ?></td>
				<td><?php echo $row[5]; ?></td>
				<td><?php echo $row[5]; ?></td>
				<td><button type="button" class="btn btn-danger" ><a href="delete.php?id=<?php echo $row[0] ?>" style="color:#fff;">delete</a></button></td>
				<td><button type="button" class="btn btn-danger"><a href="update_page.php?id=<?php echo $row[0] ?>" style="color:#fff;">update</a></button></td>
		
			</tr>		
	<?php
		}
	?>	
		<table>
		<?php
		}
	?>
	</div> 
</div>
</body>
</html>             








