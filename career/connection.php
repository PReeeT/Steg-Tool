<?php
error_reporting(-1);
$host ='localhost';
$username ='root';
$password ='';
$con = mysql_connect($host,$username,$password);
if(!$con){
	die('Could not connect: ' . mysql_error());
}
$db_selected = mysql_select_db('ri', $con );
if (!$db_selected) {
    die ('Can\'t use database : ' . mysql_error());
}
?>