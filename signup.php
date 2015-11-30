<html>
<head>
    <link rel="shortcut icon" type="image/png" href="Dragon Ball.png"/>
</head>
</html>
<?php
/**
 * Created by PhpStorm.
 * User: hp1
 * Date: 29-11-2015
 * Time: 23:30
 */
$con = mysqli_connect('localhost','shibli','shibli');
if(!$con)
{
    die('No connection because, ' . mysqli_errno($con));
}
session_start();
mysqli_select_db($con,'db');
if(empty($_POST['names']))header("location: http://localhost:63342/DragonBallApp/views/alert1.php");
if(empty($_POST['unames']))header("location: http://localhost:63342/DragonBallApp/views/alert1.php");
if(empty($_POST['passwords']))header("location: http://localhost:63342/DragonBallApp/views/alert.php");
if(empty($_POST['password2s']))header("location: http://localhost:63342/DragonBallApp/views/alert.php");
if($_POST['passwords']!==$_POST['password2s'])header("location: http://localhost:63342/DragonBallApp/views/alert1.php");
if(empty($_POST['ages']))header("location: http://localhost:63342/DragonBallApp/views/alert.php");
if($_POST['ages']>99 || $_POST['ages']<10)header("location: http://localhost:63342/DragonBallApp/views/alert2.php");
if(empty($_POST['eids']))header("location: http://localhost:63342/DragonBallApp/views/alert.php");

$query1 = "insert into usersdata VALUES ('$_POST[names]','$_POST[unames]','$_POST[passwords]','$_POST[ages]','$_POST[eids]');";
$result1 = mysqli_query($con,$query1);
header("location: http://localhost:63342/DragonBallApp/views/database.php");
