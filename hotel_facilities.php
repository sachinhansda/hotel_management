<?php
$t0=$_REQUEST["var"];
$conn=mysqli_connect("localhost","root","","");
$sql="select count(*) as count_room from room group by room_type having hotel_id='".$t0."' and occupied='no'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_row($result);
echo '<html>
<head>
<title>'.$t0.'</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>';
echo '<h2>Rooms</h2>';
echo '<div class="table-responsive">';
echo '<table border="1" class="table table-hover table-striped">';
echo '<tr>';
while($row=mysqli_fetch_assoc($result))
{
	echo '<td>'.$row["room_type"].'<br>';
	echo 'No. of available rooms = '.$row["count_room"].'<br>';
	echo '<input type="submit" class="btn btn-link" name="sub" value="BOOK"></td>';
}
echo '</tr></table></div>';
$sql1="select * from services where hotel_id='".$t0."'";
$result1=mysqli_query($conn,$sql);
$row1=mysqli_fetch_row($result);
echo '<h2>Services</h2>';
while($row1=mysqli_fetch_assoc($result1))
{
	echo $row1["service_name"];
	echo '<br>';
}
echo '</body></html>';
?>