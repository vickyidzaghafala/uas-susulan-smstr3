<?php
$user="root";
$server="localhost";
$password="";
$database="db_masters";

$input=mysqli_connect($server,$user,$password);
if($input){
	echo ' ';
}else{
	echo 'Cek Lagi';
}

$db=mysqli_select_db($input,$database);
if($db){
	echo ' ';
}else{
	echo 'Cek Lagi';
}
?>
