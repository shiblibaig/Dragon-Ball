<html>
<head>
    <link rel="shortcut icon" type="image/png" href="Dragon Ball.png"/>
</head>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 28-11-2015
 * Time: 20:17
 */
$con = mysqli_connect('localhost','shibli','shibli');
if(!$con)
{
    die('No connection because, ' . mysqli_errno($con));
}
session_start();
mysqli_select_db($con,'db');
if(empty($_POST['username']))header("location: http://localhost:63342/DragonBallApp/views/fun.php");
if(empty($_POST['password']))header("location: http://localhost:63342/DragonBallApp/views/fun.php");

$query1 = "select count(*) from users where uname = '$_POST[username]';";
$result1 = mysqli_query($con,$query1);
$row1 = mysqli_fetch_row($result1);
if($row1[0]==0){
    header("location: http://localhost:63342/DragonBallApp/views/fun.php");
}
else{
    $query2 = "select * from users where uname = '$_POST[username]';";
    $result2 = mysqli_query($con,$query2);
    $row1 = mysqli_fetch_row($result2);
    if($row1[2]==$_POST['password']){
        //proceed to app.
        header("location: http://localhost:63342/DragonBallApp/views/database.php");
    }
}
if(!mysqli_query($con,$query1)){
    echo 'No execution';
}
mysqli_close($con);