<?php

include("connection.php");
//global $con;

if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }


    $methodType = $_SERVER['REQUEST_METHOD'];
    $data = array("status" => "fail", "msg" => "$methodType");

    if ($methodType === 'POST') {

            if(isset($_POST["login"]) && !empty($_POST["login"])
                && isset($_POST["password"]) && !empty($_POST["password"])){
    
    global $con;
    $arrayStorage = array();
    $query = "SELECT * FROM `users` WHERE uname = '".$_POST['uname']."' AND password = '".$_POST['password']."' ";
    $result = mysqli_query($con, $query);
	
    if($result){
		while($row = mysqli_fetch_array($result)){
	
			$userInfo = array(
				"First Name" => $row['fname'],
				"Last Name" => $row['lname'],
				"Email" => $row['email']
			);
			
			array_push($arrayStorage, $userInfo);
		}
		
	}
                
                    /*$sid= session_id();
                    $data = array("status" => "success", "sid" => $sid);
                    console.log($sid);*/


                } else {
                    $data = array("status" => "fail", "msg" => "User name and/or password not correct.");
                }


    } else {
                $data = array("status" => "fail", "msg" => "Either login or password were absent.");
            }

    //echo json_encode($data, $arrayStorage);


?>

