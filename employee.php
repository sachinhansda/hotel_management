<?php
$conn=mysqli_connect("localhost","root","","");
$sql="select * from student";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
echo '<html>
<head>
<title>Employees</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>'

?>