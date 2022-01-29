<?php
$username=$_POST['username'];
$password=$_POST['password'];
$type=$_POST['type'];


$con=new mysqli('localhost','sai','S@ish@r@n@4','admin_screen_1');
if($con->connect_error)
{
   die('connection failed:' +$con->connect_error);
}
else
{
$stmt=$con->prepare("insert INTO login(username,password,type) values('sai','sai123','admin')");
$stmt->execute();
echo "detials successfully";
$stmt->close();
$con->close();
}
?>