<?php
$user='root';
$pass='';
$db='election';
$db=new mysqli('localhost',$user,$pass,$db);
echo 'username' . 'password';
$query="select * from `voter`";
if($is_query_run=mysqli_query($db,$query))
{
while($query_executed=mysqli_fetch_assoc($is_query_run))
{
echo $query_executed['Name'].' ';
echo $query_executed['Password'].'<br>';
}
}
?>