<?php
ini_set("memory_limit","256M");
ini_set("gd.jpeg_ignore_warning", 1);
$key = 'the quick brown fox jumps over the lazy ';
//header('Content-type: image/jpeg');
function enc_encrypt($string, $key) {
    $result = '';
    for($i = 0; $i < strlen($string); $i++) {
    	$char = substr($string, $i, 1);
    	$keychar = substr($key, ($i % strlen($key))-1, 1);
    	$char = chr(ord($char) + ord($keychar));
    	$result .= $char;
    }

    return base64_encode($result);
	
}

function enc_decrypt($string, $key) {
    $result = '';
    $string = base64_decode($string);

    for($i = 0; $i < strlen($string); $i++) {
    	$char = substr($string, $i, 1);
    	$keychar = substr($key, ($i % strlen($key))-1, 1);
    	$char = chr(ord($char) - ord($keychar));
    	$result .= $char;
    }

    return $result;
}

		$con=mysqli_connect("localhost","root","","StegLSB");
		$username=$_POST["uname"];
		$password=$_POST["pass"];
		$cpassword=$_POST["cpass"];
		$m_u=md5($username);
		$m_p=md5($password);

$fileName = $_FILES["avatar"]["name"]; //GETTING THE FILE NAME OF THE UPLOADED IMAGE
$fileName= substr_replace($fileName,"png",-3,3); //CHANGING IMAGE EXTENSION FROM JPG TO PNG
//echo $fileName;
//$fileTmpLoc = $_FILES["avatar"]["tmp_name"];
// Path and file name
$fileName = substr_replace($fileName, '_'.$username, -4, 0); //CONCATENATING USERNAME WITH FILENAME
$pathAndName = "avatars/".$fileName;//IMAGE NAME AND PATH 
//echo $pathAndName;

$q="insert into users_entity (Username, Password, AvatarName) values ('$m_u','$m_p','$fileName')";
if(mysqli_query($con,$q)==true)
{

// Run the move_uploaded_file() function here
$img= $_FILES['avatar']['tmp_name'];
$message=$_POST['msg'];					//KEY FROM USER
$im_original=imagecreatefromjpeg($img);	//CREATE AN IMAGE RESOURCE FROM THE UPLOADED IMAGE
$im = imagecreatefromjpeg($img);//
$new_image = imagecreatetruecolor(400, 400); //COMPRESSING INTO 400X400 IMAGE
 imagecopyresampled($new_image, $im, 0, 0, 0, 0 ,400 ,400, imagesx($im), imagesy($im)); 
$string = $message;
$arr_msg_ascii[]= array(); 
$enc_msg= enc_encrypt($string, $key)."\n"; //ENCRYPTING THE KEY
//$dec_msg= enc_decrypt(enc_encrypt($string, $key), $key)."\n";
$arr_msg=str_split($enc_msg);//SPLITTING ENCRYPTED MSG INTO CHARACTERS
for($i=0;$i<count($arr_msg);$i++)
{

$arr_msg_ascii[$i]=ord($arr_msg[$i]);//CONVERTING EACH CHARACTER INTO ITS ASCII VALUE
}
$arr_msg_bin=array();
for($i=0;$i<count($arr_msg_ascii);$i++) //CONVERTING EACH ASCII VALUE INTO ITS BINARY VALUE
{

$arr_msg_bin[$i]=decbin($arr_msg_ascii[$i]);
$arr_msg_bin[$i] = substr("00000000",0,8 - strlen($arr_msg_bin[$i])) . $arr_msg_bin[$i];
}
//var_dump($arr_msg_bin);
$data=implode(" ",$arr_msg_bin);
$data = str_replace(" ","",$data);
echo $data;// FINAL BINARY DATA -72 BITS (9 CHARACTERS * 8 BITS=72)

/*
*72 bit binary data
change bit intensity value of red in each of the 72 selected pixels 
* 
*/
//from here

$file = $new_image;
	$width = imagesx($file);
	$height = imagesy($file);		
for($x = 9; $x < 10; $x++) //SELECTING 9TH ROW
	{
		for($y = 0; $y < 72; $y++) //USING PIXELS IN 9TH ROW PIXEL ZERO TO PIXEL SEVENTY ONE TO STORE BINARY VALUES
		{
		$rgb = imagecolorat($file, $x, $y);
			
			$new_g = ($rgb >> 8) & 0xFF;
			$new_b = $rgb & 0xFF;
			
			//$new_r+=ord($arr_msg[$i]);
			//$new_r+=100;
			//$new_r-=100;
			$t=$data[$y];
			$new_r = ($rgb >> 16) & 0xFF;
			$r_bin=decbin($new_r);
			$r_bin = substr("00000000",0,8 - strlen($r_bin)) . $r_bin;
			//echo "<br>before changing ".$r_bin;
			//echo "<br>";
				$r_bin[7]=$t;
			$r=bindec($r_bin);
			//echo "    after changing ",$r_bin."<br>";
			//echo $new_r." + ".$t." = ".($new_r+$t);
			//echo "<br>";
			$new_r=$r;//							THE RED VALUE IS ALTERED WITH BINARY DATA AND STORED
			//echo $new_r."<br>";
			$new_color = imagecolorallocate ( $file , $new_r , $new_g , $new_b );
			imagesetpixel($file,$x,$y,$new_color);
		}
	}
	
	$boo=imagepng($file,$pathAndName);	//MODIFIED IMAGE
if($boo==TRUE) {
	
   header("Location: reg_message.php");
   // echo "File has been moved from " . $fileTmpLoc . " to" . $pathAndName;
} else {
     echo "ERROR: File not moved correctly";
}
}
else
{
	echo mysqli_error($con);
}

?>
