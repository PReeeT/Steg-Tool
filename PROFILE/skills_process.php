<?php
session_start();
include("connection.php");


//$name = "hello";
$name = $_SESSION['uname'];
$sk1 = $_POST['textbox1'];
$rate1 = $_POST['list1'];
$sk2 = $_POST['textbox2'];
$rate2 = $_POST['list2'];
$sk3 = $_POST['textbox3'];
$rate3 = $_POST['list3'];
$sk4 = $_POST['textbox4'];
$rate4 = $_POST['list4'];
$sk5 = $_POST['textbox5'];
$rate5 = $_POST['list5'];



if($sk1==NULL)
{
    $sk1 ="NONE";
}
if($sk2==NULL)
{
    $sk2 ="NONE";
}
if($sk3==NULL)
{
    $sk3 ="NONE";
}
if($sk4==NULL)
{
    $sk4 ="NONE";
}
if($sk5==NULL)
{
    $sk5 ="NONE";
}

$res="update skills set Name='$name', Skill_1='$sk1', Rate_1 = '$rate1', Skill_2='$sk2', Rate_2='$rate2', Skill_3='$sk3', Rate_3='$rate3', Skill_4='$sk4', Rate_4='$rate4', Skill_5='$sk5', Rate_5='$rate5' where Name='$name'";
if (!mysql_query($res))
  {
  die('Error: ' . mysql_error($con));
  }
header("location: student_profile.php");

   


?>