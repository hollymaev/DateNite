<?php
//purpose of this file is to connect to the database
$con = mysqli_connect("localhost", "root", "root", "datenite");
//$con = mysqli_connect("localhost", "datenit2_holly", "2425475051", "datenit2_datenite");

if(mysqli_connect_errno()){
	echo "Something went wrong connecting... ".mysqli_connect_error();
}




//please change the servername and dblogin and dbname in get.php and check.php
?>
