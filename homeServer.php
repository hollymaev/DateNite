<?php
//this file is for manipulating data in the back
include("connection.php");

if($_POST['mode'] == 1){
	showActivity();
    //renderJSON();
} else if($_POST['mode'] == 2){
	showCompany();	
} else if($_POST['mode'] == 3){
    saveCompany();
}

?>