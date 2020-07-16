<?php
$user='root';
$pass='';
$db='election';
$db=new mysqli('localhost',$user,$pass,$db);
$name=$_POST['name'];
$password=$_POST['password'];
$sql="select * from voter where Name='$name'";
$res=mysqli_query($db,$sql);
if(mysqli_num_rows($res)>0)
{
$sql1="insert into voter (Name,Password) values ('$name','$password')";
if(mysqli_query($db,$sql1))
{
echo "inserted";
}
}
else
{
echo "not possible";
}
?>