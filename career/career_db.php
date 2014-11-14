<?php
		session_start();
		
		include("connection.php");
		$username = $_SESSION['name'];
		$email = $_POST['email'];
		$college = $_POST['college'];
		$degree = $_POST['degree'];
		
		$why = $_POST['why'];
		
		mysql_query("INSERT INTO career (username, email, college, degree, why)
VALUES ('$username', '$email', '$college', '$degree', '$why')");
		//echo 'hi';
		$name= $_FILES['file']['name'];
		$extension = strtolower(substr($name, strpos($name, '.')+1));
		$max_size = 2097152;
		$size = $_FILES['file']['size'];
		$finalname= $_SESSION['name'];
		$temp_name = $_FILES['file']['tmp_name'];
		if(isset($name)){
			if(!empty($name)){
					echo 'inside';
				if(($extension=='pdf' || $extension == 'doc' || $extension == 'docx') && $size<=$max_size){
					$location ='./careeruploads/';
					//echo 'uploading';
					if(move_uploaded_file($temp_name, $location.$username.'.pdf')){
					//echo 'uploaded';
					header("Location: ./index.php?msg=1");
					}
					else{
						header("Location: ./index.php?msg=1");
					}
				}
				else{
					header("Location: ./index.php?msg=2");
					//echo 'file must be less than 2 mb and should be pdf doc docx';
				}
			}	
			else{
				header("Location: ./index.php?msg=3");
				echo 'Please choose a file';
			}
		}
		mysql_close($con);					
            
?>			