<?php 
include 'connect.php';

$name =$_POST['name'];
$address=$_POST['address'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$userid=$_POST['userid'];
$password=$_POST['password'];

$sql_users="INSERT INTO users (Name,Address,Contact,email,userid,password) VALUES ('$name','$address','$contact','$email',''$userid,'$password')";
if(mysqli_query($connect,$sql_users))
{
	echo "User is Registered Successfully.<br>";
}
else
{
	echo "Registration unseccessful, please try again.<br>";
}
echo $sql_users;

?>