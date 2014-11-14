<?php
	$key = 'the quick brown fox jumps over the lazy '; //PRIVATE KEY TO ENCRYPT THE MESSAGE(WHICH IS NOTHING BUT OUR KEY)

	class StegCrypto
	{
		public $result;
		public function enc_encrypt($string, $key)
		{
			$result = '';
			for($i = 0; $i < strlen($string); $i++) 
			{
				$char = substr($string, $i, 1);
				$keychar = substr($key, ($i % strlen($key))-1, 1);
				$char = chr(ord($char) + ord($keychar));
				$result .= $char;
			}
			return base64_encode($result);	
		}

		public function enc_decrypt($string, $key)
		{
			$result = '';
			$string = base64_decode($string);
			for($i = 0; $i < strlen($string); $i++) 
			{
				$char = substr($string, $i, 1);
				$keychar = substr($key, ($i % strlen($key))-1, 1);
				$char = chr(ord($char) - ord($keychar));
				$result .= $char;
			}
			return $result;
		}
		function encrypt_decrypt($action, $string)
		{
			$output = false;
			$encrypt_method = "AES-256-CBC";
			$secret_key=$data_org1;
			$secret_iv = '1111';
			// hash
			$key = hash('sha256', $secret_key);
			// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
			$iv = substr(hash('sha256', $secret_iv), 0, 16);
			if( $action == 'encrypt' )
			{
				$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
				$output = base64_encode($output);
			}
			else if( $action == 'decrypt' )
			{
				$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
			}
			return $output;
		}
	}
	class Stegdb
	{
		function getReceiverAvatar()
		{	
			if (!isset($_SESSION))
			{
				session_start();
			}
			$receiver_name = $_POST["name"];			//RECEIVER'S NAME
			$receiver_name2 = $receiver_name;
			$receiver_name = md5($receiver_name);					//ENCRYPTED NAME
			$uname=$_SESSION["username"];	//SENDER'S NAME
			$uname=md5($uname);
			
			$con=mysqli_connect("localhost", "root", "","StegLSB");		//CONNECTING TO DATABASE
			$sql="select * from users_entity where Username='$uname'";	//QUERY TO GET ALL FIELDS OF THE PARTICULAR USERNAME(SENDER)
			$sql2="select * from users_entity where Username='$receiver_name'";		//QUERY TO GET ALL FIELDS OF THE PARTICULAR USERNAME(RECEIVER)
			
			$result=mysqli_query($con,$sql);							//RETRIEVING IMAGE NAME OF SENDER
			while($row = mysqli_fetch_array($result))
			{
				$avatar_name=$row["AvatarName"];
			}
			$result2=mysqli_query($con,$sql2);					//RETRIEVING IMAGE NAME OF RECEIVER
			while($row2 = mysqli_fetch_array($result2))
			{
				$avatar_name_2=$row2["AvatarName"];
			}	
    
			$pathAndName="./avatars/".$avatar_name;				//PATH OF THE SENDER'S IMAGE
			$pathAndName2="./avatars/".$avatar_name_2;
			
			$encryptreceiverkey_obj = new EncryptReceiverKey();
			$encryptreceiverkey_obj -> EncryptKey($pathAndName, $pathAndName2, $receiver_name2);
		}
	}
	class EncryptReceiverKey
	{
		var $pathAndName;
		var $pathAndName2;
		var $receiver_name2;
		function EncryptKey($path, $path2, $receiver2)
		{
			$this->pathAndName = $path;
			$this->pathAndName2 = $path2;
			$this->receiver_name2 = $receiver2;
			$im = imagecreatefrompng($this->pathAndName);				//LOADING THE SENDER'S IMAGE INTO PHP VARIABLE
			$im3 = imagecreatefrompng($this->pathAndName2);				//LOADING THE RECEIVER'S IMAGE INTO PHP VARIABLE
			
			$file = $im;
			$width = imagesx($file);
			$height = imagesy($file);		
			for($x = 9; $x < 10; $x++) 
			{
				for($y = 0; $y < 72; $y++) 
				{
					$rgb = imagecolorat($file, $x, $y);
					$new_g = ($rgb >> 8) & 0xFF;
					$new_b = $rgb & 0xFF;
					$new_r = ($rgb >> 16) & 0xFF;
					$r_bin=decbin($new_r);
					$r_bin = substr("00000000",0,8 - strlen($r_bin)) . $r_bin;
					//echo "<br>before changing ".$r_bin;
					//echo "<br>";
					$t[$y]=$r_bin[7];
					//echo "    after changing ",$r_bin."<br>";
					//echo $new_r." + ".$t." = ".($new_r+$t);
					//echo "<br>";
					//echo $new_r."<br>";
				}
			}
			//var_dump($t);
			$t3=$t;
			$str_data=NULL;
			for($i=0;$i<count($t);$i++)
			{
				$str_data.=$t[$i];
			}
			//$ch=chunk_split($str_data,8," ");
			$ch=$str_data;
			$data_arr=array(); 
			$data_arr=str_split($ch,8);
			//var_dump($data_arr);
			$data_ascii=array();
			for($i=0;$i<9;$i++)
			{
				$data_ascii[$i]=bindec($data_arr[$i]);
				$data_org[$i]=chr($data_ascii[$i]);
			}
	
			//var_dump($data_ascii);
			var_dump($data_org);
			$data_org1="";
			$data_org1=implode("",$data_org);
			
			$stegcrypto_obj = new StegCrypto();
			global $key;
			$data_org1= $stegcrypto_obj->enc_decrypt($data_org1,$key); //////KEY KEY KEY
			//echo $data_org1;
  
			//trying to embed the obtained key into receiver's image
			$file2 = $im3;
			$width2 = imagesx($file);
			$height2 = imagesy($file);		
			for($x = 9; $x < 10; $x++) //SELECTING 9TH ROW
			{
				for($y = 0; $y < 72; $y++) //USING PIXELS IN 9TH ROW PIXEL ZERO TO PIXEL SEVENTY ONE TO STORE BINARY VALUES
				{
					$rgb2 = imagecolorat($file2, $x, $y);
					$new_g2 = ($rgb2 >> 8) & 0xFF;
					$new_b2 = $rgb2 & 0xFF;
			
					//$new_r+=ord($arr_msg[$i]);
					//$new_r+=100;
					//$new_r-=100;
					$t2=$t3[$y];
					$new_r2 = ($rgb2 >> 16) & 0xFF;
					$r_bin2=decbin($new_r2);
					$r_bin2 = substr("00000000",0,8 - strlen($r_bin2)) . $r_bin2;
					//echo "<br>before changing ".$r_bin;
					//echo "<br>";
					$r_bin2[7]=$t2;
					$r2=bindec($r_bin2);
					//echo "    after changing ",$r_bin."<br>";
					//echo $new_r." + ".$t." = ".($new_r+$t);
					//echo "<br>";
					$new_r2=$r2;//							THE RED VALUE IS ALTERED WITH BINARY DATA AND STORED
					//echo $new_r."<br>";
					$new_color2 = imagecolorallocate ( $file2 , $new_r2 , $new_g2 , $new_b2 );
					imagesetpixel($file2,$x,$y,$new_color2);
				}
			$pdfencryption_obj = new PDFEncryption();
			$pdfencryption_obj->encryptPdf($this->receiver_name2,$data_org1);
			}
			//$boo2=imagepng($file2,$pathAndName2);
			
			
		}
	}
	class PDFEncryption
	{
		var $receiver_name2;
		var $data_org1;
		function encryptPdf($receiver, $data)
		{
			$this->receiver_name2 = $receiver;
			$this->data_org1 = $data;
			$t=array();
			include 'pdf2text.php';		//FILE USED TO EXTRACT TEXT FROM A PDF FILE
			include 'createPDF.php';
			$username=$_SESSION["username"];
			//$_SESSION['sname']= "File1";
			$name= $_FILES['file']['name'];
			$fileName = substr_replace($name, '_'.$this->receiver_name2, -4, 0);
			$_SESSION["filename"]=$fileName;
			$extension = strtolower(substr($name, strpos($name, '.')+1));
			$max_size = 2097152;
			$size = $_FILES['file']['size'];
			$finalname= $name;
			$temp_name = $_FILES['file']['tmp_name'];
		
				if(($extension=='pdf' || $extension == 'doc' || $extension == 'docx') && $size<=$max_size){
					$location ='./File_uploads/';
					//echo 'uploading';
					if(move_uploaded_file($temp_name, $location.$fileName))
					{

						//echo 'uploaded';
						//header("Location: ./readEncrypt.php?msg=1");
						//*********Encrypting file*************
						$filename= $location.$fileName;
						$str  = pdf2text($filename);
						$content = $str;
						//echo $content;
										
						$plain_txt = $content;
						function encrypt_decrypt($action, $string)
						{
							$output = false;
							$encrypt_method = "AES-256-CBC";
							$secret_key=$data_org1;
							$secret_iv = '1111';
							// hash
							$key = hash('sha256', $secret_key);
							// iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
							$iv = substr(hash('sha256', $secret_iv), 0, 16);
							if( $action == 'encrypt' )
							{
								$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
								$output = base64_encode($output);
							}
							else if( $action == 'decrypt' )
							{
								$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
							}
							return $output;
						}
						
						//$stegcrypto_obj = new StegCrypto();
						$encrypted_txt = encrypt_decrypt('encrypt', $plain_txt);
						createPDF($encrypted_txt);
						
						header("Location: ./PROFILE/student_profile.php");
					
					}
					else{
						echo $location.$fileNam."hello";
						//header("Location: ./index.php?msg=1");
					}
				}
				else{
					header("Location: ./index.php?msg=2");
					//echo 'file must be less than 2 mb and should be pdf doc docx';

				}
		}
	}
	$stegdb_obj = new Stegdb();
	$stegdb_obj->getReceiverAvatar();
?>