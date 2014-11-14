<?php
	if (!isset($_SESSION))
	session_start();
	
	$uname=$_SESSION["username"];
    $uname=md5($uname);
	$con=mysqli_connect("localhost", "root", "","StegLSB");
	$q="select * from users_entity where Username='$uname'";
	$result=mysqli_query($con,$q);
	while($row = mysqli_fetch_array($result)) 
	{
		$avatar_name=$row["AvatarName"];
	}
	$pathAndName="../avatars/".$avatar_name;
	$im = imagecreatefrompng($pathAndName);
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
	$str_data=NULL;
	for($i=0;$i<count($t);$i++)
	{
		$str_data.=$t[$i];
	}
	
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
	global $key;
	$data_org1= enc_decrypt($data_org1,$key); //////KEY KEY KEY
	$secret_key=$data_org1;
    
    
	$key = 'the quick brown fox jumps over the lazy ';
	function encrypt_decrypt($action, $string)
	{
		$output = false;
		$encrypt_method = "AES-256-CBC";
    
		//$secret_key = $_SESSION['Key'];
		$secret_iv = '1111';

		// hash
		$key = @hash('sha256', $secret_key);
    
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
	function enc_decrypt($string, $key)
	{
		$result = '';
		$string = base64_decode($string);

		for($i = 0; $i < strlen($string); $i++)
		{
			$char = substr($string, $i, 1);
			$keychar = @substr($key, ($i % strlen($key))-1, 1);
			$char = chr(ord($char) - ord($keychar));
			$result .= $char;
		}
		return $result;
	}
	

	if(isset($_GET["msg"]))
	{
		$msg=$_GET["msg"];
		//$msg="Pritam.pdf";
		$file='../File_uploads/'.$msg;
		include 'pdf2text.php';
		include 'createPDF.php';
	
		$filename= $file;
		echo "<br>";
		$content  = pdf2text($filename);
		echo "<br>";
		$encrypted_txt= $content;
		$decrypted_txt = encrypt_decrypt('decrypt', $encrypted_txt);
		$pdf = new FPDF();
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(40,10,$decrypted_txt);
		ob_end_clean();
		$pdf->Output();
		//echo "Encrypted text: ".$encrypted_txt;
		//echo "Decrypted text: ".$decrypted_txt;
		//echo "<br><br>";
		//echo "<br><br>the link".$file;
	}
//print_r($files1);
?>