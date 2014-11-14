<?php
	  session_start();
	  include("connection.php");	
	  
	  $username=$_SESSION['uname'];
	  $password=$_SESSION['password'];
	  $email=$_POST["email"];
	  $college=$_POST["college"];
	  $city=$_POST["city"];
	  $country=$_POST["country"];
	  $degree=$_POST["degree"];
	  $eyp=$_POST["eyp"];
	  $cgpa=$_POST["cgpa"];
	  $aboutme=$_POST["aboutme"];	  
	  
	  //echo $degree;
	  //echo $aboutme;
	  
	  $count= mysql_query("SELECT * FROM users where username='$username'");
	  
	  if(mysql_num_rows($count)==1){
		
		 mysql_query("UPDATE users set country='$country', univ='$college', emailid='$email', eyp='$eyp', cgpa='$cgpa', sos='$degree', city='$city', aboutme='$aboutme' 
			  where username='$username'");
			  
			$_SESSION['country']= $country;
			$_SESSION['univ']= $college;
			$_SESSION['emailid']= $email;
			$_SESSION['cgpa']= $cgpa;
			//$_SESSION['dob']= $row['dob'];
			$_SESSION['sos']= $degree;
			$_SESSION['eyp']= $eyp;
			$_SESSION['city']= $city;
			$_SESSION['name']= $username;
			$_SESSION['aboutme']=$aboutme;
			
			//echo $_SESSION['sos'];
			
		$_SESSION['views']=$_SESSION['views']+1;
		$_SESSION['IsValid']= true;
		
		header("Location: ./PROFILE/student_profile.php");
	  }
	  else{
		header("Location: ./profile_student_edit.php?msg=2");
	  }
	 
	  mysql_close($con);
	  //include("dbclose.php");
?>