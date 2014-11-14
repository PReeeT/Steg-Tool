<html>
<head>
<title>Download File From MySQL Database</title>
<meta http-equiv="Content-Type" content="text/html; 
charset=iso-8859-1">
</head>
<body>
<?php
//database connection
include('connection.php');
$query = "SELECT sno, username FROM apply";
$result = mysql_query($query) or die('Error, query failed');
if(mysql_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
while(list($id, $name) = mysql_fetch_array($result))
{
?>
<a href="download_a.php?id=<?php echo urlencode($id);?>"
><?php echo urlencode($name);?></a> <br>
<?php 
}
}
mysql_close();
?>
</body>
</html>
<?php
if(isset($_GET['id'])) 
{
// if id is set then get the file with the id from database
include('connection.php');
$id    = $_GET['id'];
$query = "SELECT CV " .
         "FROM apply WHERE sno = '$id'";
$result = mysql_query($query) or die('Error, query failed');
list($content) = mysql_fetch_array($result);
header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
ob_clean();
flush();
echo $content;
mysql_close();
exit;
}
?>