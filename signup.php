<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
<div class="jumbotron"><center><h1>Sign Up</h1></center></div>
<div class="container">
<center>
<form class="form-horizontal" action="user_signup.php" method="POST">
<div class="form-group">
<label class="col-md-2 control-label">Customer ID:</label>
<label class="col-md-10"><input type="text" class="form-control" placeholder="Enter ID" name="t0"></label>
</div>
<div class="form-group">
<label class="col-md-12"><input type="submit" class="btn btn-default" value="Check ID" name="sub"></label>
</div>
</form>
</center>
</div>
</body>
</html>
<?php
$conn=mysqli_connect("localhost","root","","batch");
@$id=$_POST["t0"];
if(isset($_POST["sub"]))
{
	$sql="select * from customer where custid='".$id."'";
	$result=mysqli_query($conn,$sql);
	$count=mysqli_num_rows($result);
	$row=mysqli_fetch_row($result);
	if($count=0)
	{
		header('location:signup2.php?var='.$id.'');
	}
	else
	{
		echo 'Customer ID exists, choose another';
	}
}
?>