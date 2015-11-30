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
	$query = "SELECT activity.ID,activity.act_name,activity.price_range,activity.time_of_day,activity.city,activity.imgSrc, company.ID AS compID 
    FROM `activity` 
    LEFT JOIN company ON company.activity_id = activity.ID
    WHERE price_range = '".$_POST['budget']."' AND time_of_day = '".$_POST['time']."' LIMIT 3";
    //echo $query;
	$result = mysqli_query($con, $query);
	if($result){
		while($row = mysqli_fetch_array($result)){
	
            //$arrayStorage[] = $row;
			$activityInfo = array(
				"ID" => $row['ID'],
                "compID" => $row['compID'],
                "act_name" => $row['act_name'],
				"price_range" => $row['price_range'],
				"time_of_day" => $row['time_of_day'],
                "city" => $row['city'],
                "imgSrc" => $row['imgSrc']
			);
			
			array_push($arrayStorage, $activityInfo);
		}
		
	}	
	echo json_encode($arrayStorage);

}

function showCompany(){
    global $con;

    //echo json_encode("HEEEy");

    $arrayStorage = array();
    $query = "SELECT * FROM `company` WHERE ID = '".$_POST['compID']."'";
    $result = mysqli_query($con, $query);

    if($result){
        while($row = mysqli_fetch_array($result)){
            $companyInfo = array(
               "company" => $row['company_name'],
                "address" => $row['address'],
                "phone" => $row['phone_number'],
                "website" => $row['website'],
                "description" => $row['description'],
                "latitude" => $row['latitude'],
                "longitude" => $row['longitude']
            );
            
            array_push($arrayStorage, $companyInfo);
        }
    }
    echo json_encode($arrayStorage);
}

function saveCompany(){
    global $con;
    
    $query = "INSERT INTO `prefs` (`user_id`,`comp_id`) VALUES ('".$_SESSION['ID']."','".$_POST['comp_id']."')";
    $result = mysqli_query($con, $query);
    
    if($result){
        echo json_encode($result);
    } else{
        echo json_encode ($result);
    }
    
}


?>