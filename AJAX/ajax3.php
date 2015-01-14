<?php 
$id    = 0;
$value = "";
$value=$_REQUEST["value"];
$id=$_REQUEST["id"];

$con = mysqli_connect("localhost","root","root","ajax_test");

if($value == "")
{
	$query="delete from checkbox where id='$id'";
	mysqli_query($con, $query);
	mysqli_close($con);
	echo $id;
}
else 
{

	$query = "INSERT INTO checkbox VALUES (NULL,'$value')";
	mysqli_query($con, $query);
	echo  '<div><input name="chk" id="'.mysqli_insert_id($con).'"type="checkbox" class="chk" onclick="chkboxlength();"/>'.$value.'</div>';
	mysqli_close($con);
}

exit();

?>