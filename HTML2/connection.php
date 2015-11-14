<?php
//purpose of this file is to connect to the database
$con = mysqli_connect("localhost", "root", "root", "datenite");

if(mysqli_connect_errno()){
	echo "Something went wrong connecting... ".mysqli_connect_error();
}
?>