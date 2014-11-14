<?php
session_start();
include("connection.php");


//$name = "hello";
$name = $_SESSION['uname'];
$project1 = $_POST['textbox1'];
$description1 = $_POST['textarea1'];
$project2 = $_POST['textbox2'];
$description2 = $_POST['textarea2'];
$project3 = $_POST['textbox3'];
$description3 = $_POST['textarea3'];
$project4 = $_POST['textbox4'];
$description4 = $_POST['textarea4'];
$project5 = $_POST['textbox5'];
$description5 = $_POST['textarea5'];

if($project1==NULL)
{
    $project1 ="NONE";
}
if($project2==NULL)
{
    $project2 ="NONE";
}
if($project3==NULL)
{
    $project3 ="NONE";
}
if($project4==NULL)
{
    $project4 ="NONE";
}
if($project5==NULL)
{
    $project5 ="NONE";
}

if($description1==NULL)
{
    $description1="NONE";
}
if($description2==NULL)
{
    $description2="NONE";
}
if($description3==NULL)
{
    $description3="NONE";
}
if($description4==NULL)
{
    $description4="NONE";
}
if($description5==NULL)
{
    $description5="NONE";
}



$res="update project set Name='$name', Project_1='$project1', Description_1 = '$description1', Project_2='$project2', Description_2='$description2', Project_3='$project3', Description_3='$description3',Project_4='$project4', Description_4='$description4',Project_5='$project5', Description_5='$description5' where Name='$name'";
if (!mysql_query($res))
  {
  die('Error: ' . mysql_error($con));
  }
header("location: student_profile.php");

   


?>