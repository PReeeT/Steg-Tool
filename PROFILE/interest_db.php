<?php
session_start();
include("connection.php");


//$name = "hello";
$name = $_SESSION['uname'];
$sk1= $_POST['interest1'];
$sk2= $_POST['interest2'];
$sk3= $_POST['interest3'];
$sk4= $_POST['interest4'];
$sk5= $_POST['interest5'];



$r="update interest set interest1='$sk1' ,interest2='$sk2',interest3='$sk3',interest4='$sk4',interest5='$sk5' where Name='$name'";

mysql_query($r);

header('location:student_profile.php');

?>