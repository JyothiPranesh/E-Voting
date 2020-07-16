<?php
$user='root';
$pass='';
$db='election';
$db=new mysqli('localhost',$user,$pass,$db);
$name=$_POST['name'];
$no=$_POST['no'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$sql1="insert into register (Name,No,Age,Sex) values ('$name','$no','$age','$sex')";
if(mysqli_query($db,$sql1))
{
echo "inserted";
}
else
{
echo "not possible";
}
?>