<?php
session_start();
$_SESSION['show']=$_GET['show'];
$_SESSION['movie']=$_GET['movie'];
$_SESSION['theatre']=$_GET['theatre'];
if(isset($_SESSION['user']))
{
    header('location:booking.php');
}
else
{
    header('location:login.php');
}
?>

