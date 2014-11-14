<?php
	   session_start();
	   include("connection.php");
	   $oldpass=$_POST['oldpass'];
	   $newpass=$_POST['newpass'];
	   $renewpass=$_POST['renewpass'];
	   $username = $_SESSION['name'];
	   
	  // echo $username.' '.$oldpass.' '.$newpass.' '.$cnpass;
	   
	   $count= mysql_query("SELECT * FROM users where username='$username' and password='$oldpass'");
	   if(mysql_num_rows($count)==1){
		if($newpass==$renewpass){
			mysql_query("UPDATE users SET password='$newpass' WHERE username='$username'");
			header("Location: ./PROFILE/student_profile.php?msg=1");
		}else{
			header("Location: ./PROFILE/student_profile.php?msg=2");
		}
		
	}else{
		header("Location: ./profile_student_changepassword.php?msg=3");
	}
?>
