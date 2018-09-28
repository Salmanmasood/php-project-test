<?php 
$localhost='localhost';
$username='root';
$pass='';
$databse='phpproject';

$conn=mysqli_connect($localhost,$username,$pass,$databse);
if($conn==true)
{
	
//echo "<p style='color:green'>Connected.... </p>";
	

}
else
{
	echo "Connection Fialed.....";
}
?>