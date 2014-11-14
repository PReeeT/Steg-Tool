<?php session_start(); 
$id=$_SESSION["id"];
$con=mysqli_connect("localhost","root","","steglsb");
$name=$_POST["name"];
$desc=$_POST["desc"];
$due=$_POST["due"];
$uname=$_SESSION["username"];
$query="UPDATE projects SET Project_name = '$name', Project_description = '$desc',Due = '$due' WHERE Project_id = '$id'";
$result=mysqli_query($con,$query);
if($result)
{
	header("Location: ../PROFILE/student_profile.php?msg=6");
}
else
{
	echo mysqli_error($con);
	//header("Location: ../PROFILE/student_profile.php?msg=7");
}
?>