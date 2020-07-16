<?php
$user='root';
$pass='';
$db='election';
$db=new mysqli('localhost',$user,$pass,$db);
$name=$_POST['name'];
$no=$_POST['pass'];
if($name=='Admin' && $no=='Admin')
{
    ?>
    <html>
        <body>
            <a href="Register.html">Register</a><br/><br/>
            <a href="Result.php">Count</a>
</body>
</html>
<?php
}
?>