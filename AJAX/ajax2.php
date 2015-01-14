<?php 

$a = $_REQUEST["a"];
$b= $_REQUEST["b"];
$c=$_REQUEST["c"];
if($b=="+")
{
$result=$a+$c;
}
if($b=='-')
{
	$result=$a-$c;
	
}
if($b=='*')
{
	$result=$a*$c;

}

if($b=='/')
{
	$result=$a/$c;

}

echo $result;
exit();

?>