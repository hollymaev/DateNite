<?php
//this file is for manipulating data in the back
include("connection.php");

function showActivity(){
	global $con;
	
	$arrayStorage = array();
	$query = "SELECT * FROM `activity` WHERE price_range = '".$_POST['budget']."' AND time_of_day = '".$_POST['time']."'";
	$result = mysqli_query($con, $query);
	if($result){
		while($row = mysqli_fetch_array($result)){
	
			$activityInfo = array(
				"act_name" => $row['act_name'],
				"price_range" => $row['price_range'],
				"time_of_day" => $row['time_of_day'],
                "city" => $row['city']
			);
			
			array_push($arrayStorage, $activityInfo);
		}
		
	}
	
	/*echo "<pre>";
	var_dump($arrayStorage);
	echo "</pre>";*/
	echo json_encode($arrayStorage);
}

function showCompany(){
    global $con;

    //echo json_encode("HEEEy");

    $arrayStorage = array();
    $query = "SELECT * FROM `company` WHERE activity_id = '".$_POST['activityID']."'";
    $result = mysqli_query($con, $query);

    if($result){
        while($row = mysqli_fetch_array($result)){
            $companyInfo = array(
               "company name" => $row['company_name'],
                "address" => $row['address'],
                "phone number" => $row['phone_number'],
                "website" => $row['website'],
                "description" => $row['description']
            );
            
            array_push($arrayStorage, $companyInfo);
        }
    }
    echo json_encode($arrayStorage);
}

if($_POST['mode'] == 1){
	showActivity();	
} else if($_POST['mode'] == 2){
	showCompany();	
}

?>