<?php
	   session_start();
	   include("connection.php");
	   $newpass=$_POST['newpass'];
	   $confirmpass=$_POST['confirmpass'];
	   //$email=apc_fetch('rec_email');
	   //$username = apc_fetch('rec_username');
	   $rec_email= $_SESSION['rec_email'];
	   $rec_username =$_SESSION['rec_username'];
	   
	  // echo $username.' '.$oldpass.' '.$newpass.' '.$cnpass;
	   
	   $count= mysql_query("SELECT * FROM users where username='$rec_username' and emailid='$rec_email'");
	   if(mysql_num_rows($count)==1){
		if($newpass==$confirmpass){
			mysql_query("UPDATE users SET password='$newpass' WHERE username='$rec_username'");
			header("Location: ./student_recover_password_msg2.php?msg=4");
		}else{
			header("Location: ./student_recover_password_step2.php?msg=3");
		}
		
	}else{
		header("Location: ./student_recover_password_step2.php?msg=3");
	}
?>
