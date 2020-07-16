<?php
$user='root';
$pass='';
$db='election';
$db=new mysqli('localhost',$user,$pass,$db);
$party=$_POST['party'];
session_start();
$_SESSION['party']=$party;
session_write_close();
if($party=='BJP')
{
    session_start();

   
    if( isset( $_SESSION['BJP'] ) ) {
       $_SESSION['BJP'] += 1;
    }else {
       $_SESSION['BJP'] = 1;
    }
}
else if($party=='CONGRESS')
{
    session_start();
    
   
    if( isset( $_SESSION['CONGRESS'] ) ) {
       $_SESSION['CONGRESS'] += 1;
    }else {
       $_SESSION['CONGRESS'] = 1;
    }
}
else if($party=='JDS')
{
    session_start();

   
    if( isset( $_SESSION['JDS'] ) ) {
       $_SESSION['JDS'] += 1;
    }else {
       $_SESSION['JDS'] = 1;
    }
}
else {
    
    session_start();
   
    if( isset( $_SESSION['OTHERS'] ) ) {
       $_SESSION['OTHERS'] += 1;
    }else {
       $_SESSION['OTHERS'] = 1;
    }

}
echo "count=".$_SESSION['BJP'];

?>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
<a href="logout.html">LOGOUT</a>
</body>
</html>