<?php
include("connection.php");
include("homeServer.php");

//global $arrayStorage;
//echo json_encode("HAII");

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
?>