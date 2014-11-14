<?php session_start(); 

$con=mysqli_connect("localhost","root","","steglsb");
$name=$_POST["name"];
$desc=$_POST["desc"];
$due=$_POST["due"];
$uname=$_SESSION["username"];
$query="INSERT INTO projects (Username,Project_name,Project_description,Due) values ('$uname','$name','$desc','$due')";
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