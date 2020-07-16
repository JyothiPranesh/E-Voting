<?php
$user='root';
$pass='';
$db='election';
$db=new mysqli('localhost',$user,$pass,$db);
$name=$_POST['name'];
$no=$_POST['no'];
/*$sql="select * from register where No='$no'";
$sql1="select * from votes where No='$no'";
$res=mysqli_query($db,$sql);
$res1=mysqli_query($db,$sql1);
if(mysqli_num_rows($res)>0 && mysqli_num_rows($res1)<0)
{*/
$sql2="insert into votes (Name,No) values ('$name','$no')";
if(mysqli_query($db,$sql2))
{
?>
<html>
<body>
<form action="Count.php" method="post">
<select name="party">
<option value="BJP">BJP</option>
<option value="CONGRESS">CONGRESS</option>
<option value="JDS">JDS</option>
<option value="OTHERS">OTHERS</option>
<option value="Yellow">Yellow</option>
</select>
<input type="submit" name="submit" value="submit" />
</form>
</body>
</html>
<?php
}
//}
else
{
echo "not possible";
}
?>