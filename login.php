<?php
$username=$_POST["username"];
$password=$_POST["password"];
$m_u=  md5($username);
$m_p=  md5($password);
$con=mysqli_connect("localhost", "root", "","StegLSB");
$sql="select * from users_entity WHERE Username='$m_u' AND Password='$m_p'";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)===1)
{
	session_start();
	$_SESSION["username"]=$username;
	//selecting values from table user DB STEGLSB
	$getData= mysqli_query($con, "SELECT * FROM users where username='$username'");
	$row= mysqli_fetch_array($getData);
		$_SESSION['firstname']= $row['fname'];
		$_SESSION['lastname']= $row['lname'];
		$_SESSION['uname']= $row['username'];
		$_SESSION['country']= $row['country'];
		$_SESSION['univ']= $row['univ'];
		$_SESSION['emailid']= $row['emailid'];
		$_SESSION['phone']= $row['phone'];
		$_SESSION['cgpa']= $row['cgpa'];
		//$_SESSION['dob']= $row['dob'];
		$_SESSION['sos']= $row['sos'];
		$_SESSION['eyp']= $row['eyp'];
		$_SESSION['city']= $row['city'];
		$_SESSION['aboutme']=$row['aboutme'];
	
   header("Location: ./PROFILE/student_profile.php");
  //echo "Login Succcess";
}
 else
     {
    echo "Login failure";
}
?>
