<?php

$count=$_REQUEST["val"];
$flag=$_REQUEST["flag"];
$con = mysqli_connect("localhost","root","root","ajax_test");
if($flag==true)
{
	$sql="SELECT visitor_count from visitor";
	$result = mysqli_query($con,$sql) ;
	$row_cnt = mysqli_num_rows($result);
	mysqli_close($con);
	echo $row_cnt;
}

else
{
	$query = "INSERT INTO visitor VALUES ($count)";
	mysqli_query($con, $query);
}
exit();