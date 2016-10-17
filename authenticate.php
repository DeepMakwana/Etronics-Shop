<?php
include 'connect.php';

$userid=$_POST['userid'];
$password=$_POST['password'];
$sql_users="SELECT * FROM users WHERE userid='$userid' and password='$password' ";
$result_users=mysqli_query($connect,$sql_users);
if(mysqli_num_rows($result_users) <= 0)
{
	echo "No users found with entered userid and password combination";
	echo "<br><br><a href='index.php'>Try logging in again.</a>";
}
else
{
	echo "User login successful";
	$row_users=mysqli_fetch_array($result_users);
	session_start();
	$_SESSION['userid']=$row_users['userid'];
	$_SESSION['name']=$row_users['name'];
	$_SESSION['email']=$email;

}
?>