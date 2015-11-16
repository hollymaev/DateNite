<?php
include("connection.php");
include("homeServer.php");
global $con;
global $arrayStorage;

function showActivity(){
global $con;

	//$data = array("status" => "success", "activity" => $arrayStorage);
    //echo json_encode($data, JSON_FORCE_OBJECT);
    //$data = array("status" => "success", "activity" => $activityInfo);

//OMG KMN

	$arrayStorage = array();
	$query = "SELECT * FROM `activity` WHERE price_range = '".$_POST['budget']."' AND time_of_day = '".$_POST['time']."'";
	$result = mysqli_query($con, $query);
	if($result){
		while($row = mysqli_fetch_array($result)){
	
            //$arrayStorage[] = $row;
			$activityInfo = array(
				"act_name" => $row['act_name'],
				"price_range" => $row['price_range'],
				"time_of_day" => $row['time_of_day'],
                "city" => $row['city']
			);
			
			array_push($arrayStorage, $activityInfo);
		}
		
	}	
	echo json_encode($arrayStorage);

}


?>